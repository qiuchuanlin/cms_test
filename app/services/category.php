<?php
namespace App\Service;
use DB,Log;

/**
 * ===============================================================================
 * 类名:Category
 * 
 * 功能:目前只做Category的子类移动.因为项目中多次用到
 * 		此类会被做成Facade以便全局调用.
 * 		
 * 注意:这里假定category表是有pid,path,子类的path为'父类path,父类id'这样的结构.
 * 		如果表结构不同,则要改这里的代码了.	
 * 
 * 参数:
 * 		①$table_name 					->category类的表名,这里用query builder来进行数据库操作.
 * 										
 * 		②$resource_categoryid			->当前类的id,这个id可以是单个,也可以是数组如array(1,2,3),
 * 										如果是数组,则会做批量处理,这里假定所有数组里面的类,它的父类是同一个.
 *         								因为现在涉及到的项目需求也是这样的:移动父类,处理其子类
 * 
 * 		③$target_categoryid				->目标类的id,也就是当前的类需要移动到哪个类下面.
 *
 * 调用:
 * 		Facade名字为CategoryFacade,所以调用类似:
 * 				①CategoryFacade::move('表名','原类id','目标类id')
 * 			 	②CategoryFacade::move('表名',array('原类id','原类id',.....),'目标类id')
 * 
 * 返回值:	
 * 			成功->'success'	失败->'错误信息'.		
 * 			可以匹配'success'来判断是否成功							
 * ==================================================================================
 */
class Category{
	private $table_name;					//表名
	private $resource_categoryid;			//原类id
	private $target_categoryid;				//目标类id
	public 	$query_log;						//出错的话,返回数据库错误信息

	//构造函数,初始化数据,因为Facade调用的话,构造函数的参数传不进来,总是各种bug,
	//所以参数直接写到move方法上.
	public function __construct(){
	}

	//包装一下__get方法,用Facade调用时比较美观
	//原本主要是想用来获取queryLog的,但是发现在类里面的DB::getQueryLog()很不正常.
	//有的错误信息有,有的没有.
	//所以主要依靠自己返回的错误信息来判断.
	public function get($property){
		return $this->$property;
	}

	//真正的移动操作
	public function move($table_name,$resource_categoryid,$target_categoryid){
		//------------------------------------------------------------------------
		//流程:
		//		①通过原类id得到它的path,如果传过来的原类id是单个的,
		//		则替换掉它本身的path这一段就好了.
		//		
		//		②如果是数组,那么替换第一个的path那段,这样下面子类还能保持原来的继承关系.
		//		比如第一个path是"0,1",第二个是它的子类的话,path如"0,1,5".
		//		那么如果改类,第一个替换成"0,2",它的子类就变成"0,2,5".这样就保持了继承关系.
		//			---只是这样的话就要求外面查询id时得用:order by concat('path','id'),得有一个排序.
		//				以保证传进来的数组,是按顺序来的.
		//				当然,在内部我也会对数组做下排序操作,以确保这个顺序.
		//-----------------------------------------------------------------------
		

		//首先,查询目标类的path,从上面的思路已经知道,改类就是改path这一段.
		try{
			$r1=DB::table($table_name)->where('id',$target_categoryid)->first();
		}catch(\Exception $e){
			//出错
			Log::error($e->getMessage().'查询数据库错误!');
			//添加数据库错误信息
			$this->query_log=DB::getQueryLog();
			//返回错误信息
			return '查询目标类path失败!';
		}
		if(!count($r1)){
			return '没有查到数据!检查第三个参数!';
		}

		//得到目标类path,然后连上自身id,则成为其子类的path
		$target_path=$r1->path.$target_categoryid.',';
		$target_relation=$r1->relation;						//目标类的对应内容表,子类如果改到该类下,也改用同样的内容表.
		$target_model=$r1->model;							//目标类model字段
		$target_model_readable=$r1->model_readable;			//目标类model_readable字段.

		//判断下传进来的id是单个还是数组
		if(!is_array($resource_categoryid)){
			try{
				$r2=DB::table($table_name)->where("id",$resource_categoryid)->first();
			}catch(\Exception $e){
				//如果查询出错
				//记录日志
				Log::error($e->getMessage().'查询数据库错误!');
				//记录数据库报错信息
				$this->query_log=DB::getQueryLog();
				//返回错误信息
				return '查询原类path失败!';
			}

			//没有查到数据并不算异常,所以这里还得判断下是否有数据
			if(!count($r2)){
				return '没有查到数据!检查第二个参数是否正确!';
			}

			//查询成功后,将使用这个path
			$resource_path=$r2->path;
			/*-------------------------*/
		}else{
			//传进来的是一个数组
			//循环得到所有这些id对应的path,放到数组里面.
			//因为后面打算用sort()来重新排序,以确保它们的顺序确实符合原本的继承关系
			foreach($resource_categoryid as $v){
				//查询数据库
				/*这里用的是先遍历id,分个查询每个id对应的数据,把需要的id和path关联成数组,后面再用数组来排序
					其实还有一种方法,直接用whereIn这个id数组直接orderBy排序就行了.
					两个方法的目的都一样,取出排在第一个那段数据的path作为替换标准.第一个用的是数组的排序,第二个用的是数据库排序.
					那用第二条方法,直接orderBy+first()更简单方便.
				*/ 
				try{
					$r3=DB::table($table_name)->where('id',$v)->first();
				}catch(\Exception $e){
					Log::error($e->getMessage().'查询数据库失败!');
					$this->query_log=DB::getQueryLog();
					return '查询原类path失败!';
				}
				if(!count($r3)){
					return '没有查到数据!检查第二个参数是否正确!';
				}
				//成功,将path放入数组,并和id保持对应关系
				$resource_path[$r3->id]=$r3->path;	
			}
		}

		//替换原类path为目标path就行了.
		//在此之前得给数组path排序.
		if(is_array($resource_path)){
			//因为sort会重新索引,而索引我是放的数据库id,所以得复制一个数组来sort
			$arr=$resource_path;
			sort($arr);
			//然后取出第一个的path,以此为标准替换
			$first=array_shift($arr);
			//还得循环,然后逐个替换
			foreach($resource_path as $k=>$v){
				//替换后的path
				$target_path=str_replace($first,$target_path,$v);
				//写入数据库	
				//[后添加]:注意,改类除了path,还要改pid,这里的pid也就是目标类的id,但对于数组类型来说,它是一串的数据,
				//			并非所有的pid都要改,只改第一个,其它的还是第一个的后代,保持它的pid.
				//			所以下面的代码需要修改一下,判断是否第一个,第一个就要改pid,其他的照旧.
				//			判断哪个是第一个,有很多方法,这里就利用上面已经得到的资源.知道第一个的path,那么判断path相等就好了.
				//			
				//		第二个,还要改对应的模板.因为后面对添加类做了修改,每个类都添加了自己的relation,即对应的内容表.
				//		以方便删除分类时,不需要查顶级分类的relation.
				//		那么它改了分类,就应该改掉对应的内容表,应该是它现在父类的relation.可以在上面查出来.
				//		同样相关的还有model,model_readable字段.
				if($v==$first){
					DB::table($table_name)->where('id',$k)->update(array('path'=>$target_path,'pid'=>$target_categoryid,'relation'=>$target_relation,'model'=>$target_model,'model_readable'=>$target_model_readable));
				}else{
					try{
						DB::table($table_name)->where('id',$k)->update(array('path'=>$target_path,'relation'=>$target_relation,'model'=>$target_model,'model_readable'=>$target_model_readable));
					}catch(\Exception $e){
						Log::error($e->getMessage().'数据库update失败!');
						$this->query_log=DB::getQueryLog();
						return 'update数据失败!';
					}
				}
			}
			//返回成功信息
			return 'success';

		}else{
			//单个id,直接改就是了
			try{
				DB::table($table_name)->where('id',$resource_categoryid)->update(array('path'=>$target_path,'pid'=>$target_categoryid,'relation'=>$target_relation,'model'=>$target_model,'model_readable'=>$target_model_readable));
			}catch(\Exception $e){
				Log::error($e->getMessage().'数据库update失败!');
				$this->query_log=DB::getQueryLog();
				return 'update数据失败!';
			}

			//返回成功信息
			return 'success';
		}
	}
} 