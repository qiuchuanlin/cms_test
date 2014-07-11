<?php
namespace App\services;
use Config,File,Log;

/**
 * ----------------------------------------------------------
 * ＠关于这个类的说明：
 * 这个类是用来处理图片，包括上传，缩放.
 * 有图片的情况下，只要缩放，则直接调用resize方法：
 * 		Image::resize('uploads/m_1284102567286.jpg',80)
 * 需要强制缩放到指定宽高的情况：
 * 		Image::thumb('uploads/m_1284102567286.jpg',80)
 * 文件上传：
 * 		Image::upload(Input::file('file'))
 *文件上传并指定目录，以及缩放
 *		Image::upload(Input::file('file'),true,'uploads')
 *另外返回值:
 *		在上传成功的时候是返回原图和缩放图的url组成的数组,
 *		而失败则返回的是字符串的错误信息
 *		所以在调用的时候对返回值需要判断,是否数组,来决定下步操作
 *----------------------------------------------------------
 */
class Image{

	/**
	 * instance of Imagine package
	 */
	protected $imagine;

	/**
	 * error message
	 * @var string
	 */
	public $errorMsg;

	/**
	 * constructor
	 */
	public function __construct(){
		//get the instance of Imagine package
		$this->imagine=new \Imagine\Gd\Imagine();
	}

	/**
	 * test the Facade is working or not
	 * @return string some configuration
	 */
	public function test(){
		return Config::get('auth.driver');
	}

	/**
	 * resize images
	 * @invoke like: Image::resize('uploads/m_1284102567286.jpg',80)
	 * @param  string  $path     source path
	 * @param  integer $width   
	 * @param  integer  $height  
	 * @param  boolean $crop   
	 *         [此项决定是否强制宽高都和指定的一样，如果不设定，则会调整等比缩放原图，而宽高并不一定都和指定的一样] 
	 * @param string $resizeDir 指定的目标目录
	 * @param  integer $quality 
	 * @return string  $target_path 
	 */ 
	public function resize($path,$width=60,$height=null,$crop=false,$resizeDir=null,$quality=80){
		//path info
		$info=pathinfo($path);

		//get the source images infomation
		$sourceDir=$info['dirname'];
		$filename=$info['basename'];	
		$sourceDirPath=public_path().'/'.$sourceDir;
		$sourceFilePath=$sourceDirPath.'/'.$filename;

		//get the height base on width
		if(!$height){
			$height=$width;
		}

		//判断是否指定目录
		if(!$resizeDir){
			//The resized images information
			$targetDir=$width.'x'.$height.($crop?'_crop':'');
			$targetDirPath=$sourceDir.'/'.$targetDir;
			$targetFilePath=$targetDirPath.'/'.$filename;

			//The url will be using on web page
			$targetUrl=asset($targetFilePath);
		}else{
			$targetDirPath=$resizeDir;
			$targetFilePath=$targetDirPath.$filename;
			$targetUrl=asset($targetFilePath);
		}

		//get size
		$size=new \Imagine\Image\Box($width,$height);

		//get mode
		$mode=$crop ? \Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND : \Imagine\Image\ImageInterface::THUMBNAIL_INSET;	

		try{
			//create dir if missing
			if(!File::isDirectory($targetDirPath)){
				try{
					File::makeDirectory($targetDirPath);
				}catch(\Exception $e){
					Log::error($e->getMessage());
					return '失败：没有权限创建目录！';exit;
				}	
			}

			//resize and save
			if(!File::exists($targetFilePath) || File::lastModified($targetFilePath) < File::lastModified($sourceFilePath)){
				$this->imagine->open($sourceFilePath)
							->thumbnail($size,$mode)
							->save($targetFilePath,array('quality',$quality));		
			}

		}catch(\Exception $e){
			Log::error('[图像处理出错]'.$path.'缩放失败！'.'['.$e->getMessage().']');
			return '失败'.$e->getMessage();exit;
		}

		return $targetUrl;
	}

	/**
	 * helper for creating thumbs
	 * @param  string $url    
	 * @param  int $width  
	 * @param  int $height 
	 * @return thumb url         
	 */
	public function thumb($url,$width,$height=null){
		return $this->resize($url,$width,$height,true);
	}
	
	/**
	 * upload file and resize with choice
	 * @invoke like:	Image::upload(Input::file('file'),true,'uploads')
	 * @param  objec $file      object of Input::file
	 * @param  string $path      upload path
	 * @param  bool $dimension choose if resize
	 * @param string $dir 上传文件的保存目录
	 * @param bool 	$resizeDir	缩放后图片的目录
	 * @param array $dmsrule 自定义缩放尺寸等
	 * @param bool $just 是否只要指定的这套缩放模式
	 * @return array           a array contains upload url,resize url.. 
	 */
	public function upload($file,$dimension=false,$dir=null,$resizeDir=null,$dmsrule=array(),$just=false){
		if($file){
			//验证文件类型，大小等
			if(!$file->getSize()){
				return $this->errorMsg='上传图片尺寸不符！(大于0,小于2M)';exit;
			}
			if(strpos(($file->getMimeType()),'image')===false){
				return $this->errorMsg='上传的文件只能是图片类型！';exit;
			}

			//get information of upload
			$filename=$file->getClientOriginalName();

			//get information base on  config file
			$dir=$dir?$dir:Config::get('image.uploadDir');
			$dir=trim($dir,'/\\').'/';
			if($resizeDir){
				$resizeDir=trim($resizeDir,'// / \\').'/';
			}
			$destination=public_path().'/'.$dir;
			$url=asset($dir.$filename);
			//determine the uploaded file's mime type
			$uploaded=$file->move($destination,$filename);

			if($uploaded){
				//if need resize
				if($dimension){
					$path=$dir.$filename;
					$allUrl=$this->createDimensions($path,$resizeDir,$dmsrule,$just,$dir);

					if(is_array($allUrl)){
						//返回数组的话表示无错
						array_unshift($allUrl, $url);
					}

					return $allUrl;
				}
			}else{
				return $this->errorMsg='上传失败！！';exit;
			}
			
		}
	}

	/**
	 * resize the uploaded file
	 * @param  string $path    
	 * @param string $resizeDir 缩放图片存放目录       
	 * @param  array  $otherDimension tamporary resize mode
	 * @param bool $just 是否只要一个当前这一套模式,默认情况下在配置文件有多套模式，
	 *                   如果选中这个，则只按给定的这一套模式来缩放
	 * @param string $dir 目标目录
	 * @return array                 the resize URLs
	 */
	public function createDimensions($path,$resizeDir='',$otherDimension=array(),$just=false,$dir=null){
		//get dimensions from configuration
		$dimensions=Config::get('image.dimensions');

		if($otherDimension && !$just){
			$dimensions=array_merge($dimensions,$otherDimension);
		}elseif($otherDimension && $just){
			$dimensions=$otherDimension;
		}

		if(is_array(array_values($dimensions)[0])){
			//多套缩放模式
			foreach($dimensions as $dimension){
				$width=(int)$dimension[0];
				$height=$dimension[1]?(int)$dimension[1]:$width;
				$crop=$dimension[2]?(bool)$dimension[2]:false;
				
				if(count($dimensions)>3){
					$quality=$dimension[3]?(int)$dimension[3]:75;
				}else{
					$quality=75;
				}

				$url[]=$this->resize($path,$width,$height,$crop,$resizeDir,$quality);
			}
		}else{
			//单独的指定模式
			$width=$dimensions[0];
			$height=$dimensions[1];
			$back=$this->myResize($path,$width,$height,$resizeDir);

			//判断返回值是否有错误
			if(strpos($back,'失败')!==false){
				$url=$back;
			}else{
				$url[]=$back;
			}
		}

		return $url;
	}

	/**
	 * 功能:		图片缩放
	 * 说明：	因为上面这个用Imagine库写的缩放只能缩小，而不放大．
	 * 			所以这里用原生GD函数再写一个可以随便缩放的方法，以便使用	
	 * 				
	 * @param  string 	$path   		需要缩放的图片，给出准确路径
	 * @param  int 		$width     		指定缩放后的宽
	 * @param  int 		$height   		指定缩放后的高
	 * @param  string 	$resizeDir 		指定缩放后保存目录
	 * @return 成功：缩放图url      
	 *         失败：错误信息
	 */
	public function myResize($path,$width,$height,$resizeDir){
		//解析path
		$info=pathinfo($path);
		//文件名
		$filename=$info['basename'];
		//后缀
		$extension=$info['extension'];

		//创建目标目录，如果没有的话
		if(!File::isDirectory($resizeDir)){
			try{
				File::makeDirectory($resizeDir);
			}catch(\Exception $e){
				Log::error('创建目录失败！'.$e->getMessage());
				return $this->errorMsg='失败：没有权限创建目录！';exit;
			}
		}

		//拼接文件路径,以及用于返回的url
		$resizePath=$resizeDir.$filename;
		$resizeUrl=asset($resizePath);

		//得到原图宽高
		$sourceInfo=getimagesize($path);
		$sWidth=$sourceInfo[0];
		$sHeight=$sourceInfo[1];

		//拼接gd函数(类似imagecreatefromjpeg,imagejpeg)
		if($extension=='jpg'){
			$func='imagecreatefromjpeg';
			$func2='imagejpeg';
		}else{
			$func='imagecreatefrom'.$extension;
			$func2='image'.$extension;
		}

		//得到两张图的句柄
		$sSource=$func($path);	//原图句柄
		$dSource=imagecreatetruecolor($width, $height);//缩放图句柄

		//缩放
		imagecopyresampled($dSource, $sSource, 0, 0, 0, 0, $width, $height, $sWidth, $sHeight);

		//保存图片
		$func2($dSource,$resizePath);
		return $resizeUrl;
	}
}

