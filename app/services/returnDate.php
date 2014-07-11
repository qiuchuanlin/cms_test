<?php
namespace App\Services;

/**
 * ===============================================================
 *类名:ReturnDate
 *功能:	批量处理时间,返回指定的时间以'年-月-日'格式表示
 *		
 *		根据项目需求,主要是以时间排序内容表格,会有很多种时间选择,
 *		每一种都在控制器里写代码的话,重复代码会很多.
 *		这个类的作用就是,一次性将所有需要计算的时间组成一个数组传进来,
 *		然后返回一个数组,对应传进来的数组.
 *		比如:经常在页面上易读的文字是,选择:1天内的内容,2天内的内容,1个月内的内容....
 *		然后这里返回的就是,对应2天内的内容,就需要一个前一天的date('年'-'月'-'日'),
 *						对应1个月内的内容,就需要一个月前的这一天的date.
 *		因为laravel默认的数据库表的时间是'年'-'月'-'日 时:分:秒'的格式.
 *		这里返回目标的date,当前的date可以直接用date()函数.
 *		那么查询的时候就可以用:
 *				where date(uploaded_at) between 当前 and 目标
 *				---------------------------------------------
 *参数:
 *		$day(array) 	就一个参数,表示需要几天前的时间,这应该是一个数组.
 *						如果是单独一个天数,完全可以用php内置函数来求
 *
 *调用:	这个的Facade别名为ReturnDate,
 *		所以调用类似于ReturnDate::doit(array(1,2,3))
 *			---参数代表1天前,2天前,3天前的date,返回如:
 *				array (size=3)
 *    				0 => string '2014-06-30' (length=10)
 *        			1 => string '2014-06-29' (length=10)
 *           		2 => string '2014-06-28' (length=10)
 *
 * ================================================================
 */
class ReturnDate{
	public function doit($day){
		//首先,$day是个数组,所以循环处理
		foreach($day as $v){
			//得到对应的秒数
			$second=$v*24*60*60;
			//当前日期,用时间戳表示
			$now=time();
			//目标时间戳
			$target_time=$now-$second;
			//目标日期,放进一个数组,最后返回
			$date[]=date('Y-m-d',$target_time);
		}
		//返回
		return $date;
	} 
}