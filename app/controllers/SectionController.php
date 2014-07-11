<?php

/**
 * －－－－－－－－－－－－－
 *后台栏目管理 
 * －－－－－－－－－－－－－
 */
class SectionController extends BaseController{

	/**
	 * 构造方法：验证是否登陆
	 */
	public function __construct()
	{
		$this->beforeFilter('auth');
	}

	/**
	 * 内置模板：（页面）
	 * －－－－－－－－－－－－
	 * @param  int $id 用来区分是要调用哪个模板
	 * @return [type] [description]
	 */
	public function getDefaultSection($id)
	{
		//得到当前版块的数据
		$data=Htmlmodel::where('page','=',$id)->get();
		//************************to do 重组数组．
		/*foreach($data as $d){
			var_dump($d->model_name);
		}
		return;*/

		return View::make('admin.section')->with('data',$data);
	}
}