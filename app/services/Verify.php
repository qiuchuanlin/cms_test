<?php
namespace App\Services;
use Config,Session;

/*	验证码类	10/24/2013
	=======================================
	说明：1,干扰线或点的参数是个数组，$style=array('line','pixel','dasheline'),
		可以选取一个或者全部元素，以数组形式传入。如果传空数组，则不做干扰线。
		默认为line和pixel。

	         2,$bgcolor和fgcolor代表背景色和前景色。有默认颜色。
	         	如果要自定义，传入颜色的方式可以有三种：
	         	①数组形式：array(240,241,242),分别对应r,g,b
	         	②十六进制完整形式：#F2F1F0
	         	③十六进制缩写形式：#ccc
	         	默认第二种方式,也有默认值
	         
	         3,要获得此次创建的验证码字符串，调取$veristr属性。

	         4,字号$font参数，如果不传，默认15～25号随即生成。
	         	需要在配置文件中设置ttf文字库的位置

	         5,提供连贯调用方法show()，直接生成验证码图片
	=======================================
	调用：	①快速调用的话，除了以下三个,其他用默认参数
			$obj=new Verify($width,$height,$num);
			$obj->show();
			$obj->veristr;					获得验证码

			②在laravel中用Verify::show()调用.
	=======================================
*/
	class Verify{
		public 	$width;					//画布宽度
		private $height;				//画布高度
		private $num;					//需要显示多少个字符
		private $style;					//干扰线或点，可传入数组，默认实线和点
		private $img;					//图像句柄
		private $bgcolor;				//传入的背景色
		private $fgcolor;				//传入的前景色
		private $_bgcolor;				//gd生成的背景颜色码
		private $_fgcolor;				//gd生成的前景颜色码	
		private $strlib;				//用于生成验证码的各种字符
		public  $veristr;				//此次生成的验证码
		private $font;					//字号
		private $_mark;					//是否有自定前景色，做个标记
		private $ErrorMessage;			//错误信息
		private $ttf;					//文字库文件ttf的存放位置
		private $sign;					//给每次的验证码一个标识．以区分是注册的还是登录的(只在laravel中需要这样)

		//构造函数
		public function __construct($width=0,$height=0,$num=0,$bgcolor='#07013A',$fgcolor='#FCFCFC',$strlib='',$style=array('line','pixel'),$font='',$ttf=null){
			//初始化属性
			$this->width=Config::get('verify.width')?Config::get('verify.width'):$width;
			$this->height=Config::get('verify.height')?Config::get('verify.height'):$height;
			$this->num=Config::get('verify.num')?Config::get('verify.num'):$num;
			$this->style=$style;
			$this->bgcolor=$bgcolor;
			$this->fgcolor=$fgcolor;
			$this->strlib=$strlib;
			$this->font=$font;
			$this->ttf=Config::get('verify.ttf')?Config::get('verify.ttf'):$ttf;

			$this->imgcreate();						//创建画布	
			$this->bgcolor=$this->_imgconvert($bgcolor);		//转换颜色进制，以配合gd函数
			$this->fgcolor=$this->_imgconvert($fgcolor);

			if($fgcolor!='#FCFCFC'){
				$this->_mark=1;					//后加代码，如果有自定前景色，做个标记
			}

		}


		//析构函数
		public function __destruct(){
			imagedestroy($this->img);
		}

		//__set函数,这个主要是配合多个验证码，给个标识，以区分是注册的还是登录的
		public function __set($property,$value){
			if($property=='sign'){
				$this->$property=$value;
			}
		}
		

		//__get函数
		public function __get($name){
			return $this->$name;
		}	

		//创建画布,生成图像resource
		public function imgcreate(){
			$this->img=imagecreatetruecolor($this->width,$this->height);
			return $this;
		}


		//创建前景(字体)和背景颜色
		public function imgcolor(){
			$bg=$this->bgcolor;
			$fg=$this->fgcolor;
			
			$this->_bgcolor=imagecolorallocate($this->img,$bg[0],$bg[1],$bg[2]);
			$this->_fgcolor=imagecolorallocate($this->img,$fg[0],$fg[1],$fg[2]);
			return $this;
		}


		//填充颜色
		public function imgfill(){
			imagefill($this->img, 0, 0, $this->_bgcolor);
			return $this;
		}


/*		处理文字
		得到此次生成的验证码字符串
*/		public function imgfont(){
			//判断是否有传入自定的字符库
			if($this->strlib){
				$strlib=$this->strlib;
			}else{
				$strlib=implode('',range('a','z')) . implode('',range('A','Z')) . implode('',range(1,10));
				//因为汉字占三个字符，不能用str_shuffle，所以，先转成数组来做
				$strlib=str_shuffle($strlib) .'的一国在人了有中是年和大业不为发会工经上地市要个产这出行作生家以成到日民来我部对进多全建他公开们场展时理新方主企资实学报制政济用同于法高长现本月定化加动合品重关机分力自外者区能设后就等体下万元社过前面';
			}
			$arr=str_split($strlib,3);
			shuffle($arr);
			$strlib=implode('',$arr);

			//取出需要的长度
			$veristr=mb_substr($strlib,0,$this->num,'utf-8');
			$this->veristr=$veristr;
			Session::put($this->sign.'veristr',$veristr);

			for($i=0;$i<$this->num;$i++){
				$list[]=mb_substr($veristr,$i,1,'utf-8');

			}

			//针对每个字符来随即处理
			for($i=0;$i<$this->num;$i++){
				//字号随即化
				if($this->font){
					$font=$this->font;
				}else{
					$font=rand(15,25);
				}

				//坐标随即化
				$font_width=floor($this->width/$this->num)*$i;		//字符宽度×第几个，也就是它的横坐标
				$font_height=rand(imagefontheight($font)+20,$this->height-imagefontheight($font)*2);
				//随即下字体颜色
				$color=$this->_imglinecolor();
				//生成验证码图片
				imagettftext ($this->img , $font , 0 , $font_width , $font_height , $color , $this->ttf, $list[$i] );

			}

			//判断是否生成干扰线
			if(!count($this->style)){
				return $this;
			}else{
				$this->_imgline();
			}

			return $this;
		}


/*		输出图片
*/		public function imgout(){
			header('content-type:image/jpeg');
			imagejpeg($this->img);
		}


/*		快捷方法，一次调用全部可执行方法生成图片
*/		public function show(){
			$this->imgcolor()->imgfill()->imgfont()->imgout();
		}



/*		私有方法：创建干扰线
*/		private function _imgline(){
			foreach($this->style as $v){
				if($v=='line'){
					$color=$this->_imglinecolor();
					imageline($this->img, 0,rand(0,$this->height), $this->width, rand(0,$this->height), $color);
					imageline($this->img, 0,rand(0,$this->height), $this->width, rand(0,$this->height), $color);
				}elseif($v=='pixel'){
					for($i=0;$i<10;$i++){
						$w=rand(0,$this->width);
						$y=rand(0,$this->height);
						if($this->_mark==1){
							$color=$this->_fgcolor;
						}else{
							$color=$this->_imglinecolor();
						}
						imagesetpixel($this->img, $w,$y, $color);
						imagesetpixel($this->img, $w+1,$y+1, $color);
						imagesetpixel($this->img, $w+1,$y-1, $color);
						imagesetpixel($this->img, $w+5,$y-5, $color);
						imagesetpixel($this->img, $w+8,$y-3, $color);
						imagesetpixel($this->img, $w+2,$y-10, $color);
					}
				}elseif($v=='dasheline'){
					$color=$this->_imglinecolor();
					imagedashedline($this->img,0, rand(0,$this->height), $this->width, rand(0,$this->height), $color);
				}else{
					continue;
				}
			}
			return $this;	
		}


/*		私有方法：创建干扰线的随机颜色
*/		private function _imglinecolor(){
			$linecolor=imagecolorallocate($this->img, rand(0,255), rand(0,255), rand(0,255));
			return $linecolor;
		}


/*		私有方法：imgconvert,颜色进制转换
		参数：$color,要转换的颜色，根据整个页面的需求，都是转成array(r,g,b)格式。
		返回：array(r,g,b)
*/		private function _imgconvert($color){
			$c=$color;
			if(is_array($c)){
				//array(r,g,b)
				return $c;			
			
			}elseif(strlen($c)==7){
				//十六进制完整形式
				$str_c=substr($c,1);
				$c=str_split($str_c,2);			//注意，此时为数组
				foreach($c as $k=>$v){
					$c[$k]=hexdec($v);
				}
				return $c;				
			
			}elseif(strlen($c)==4){
				//十六进制缩写形式
				$str=substr($c,1);
				$str="str[0]str[0]str[1]str[1]str[2]str[2]";
				$c=str_split($str,2);
				foreach($c as $k=>$v){
					$c[$k]=hexdec($v);
				}
				return $c;
			}else{
				$this->ErrorMessage='传入颜色的格式不符要求！';
				return;
			}
			
		}	
	}