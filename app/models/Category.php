<?php

/**
 * 用于全局分类管理的model
 */
class Category extends Eloquent {
	//id不通过mass Assignment
	protected $guarded=array('id');	

	//该类对应的表
	protected $table='categorys';

	//一对多：新闻
	public function news(){
		return $this->hasMany('News');
	}

}
