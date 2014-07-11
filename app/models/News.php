<?php

class News extends Eloquent {
	protected $guarded = array();
	public static $rules = array();

	protected $tabel='news';

	//对应category的一对多:
	public function category(){
		$this->belongsTo('Category');
	}
}
