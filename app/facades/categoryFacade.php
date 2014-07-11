<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class Category extends Facade{
	protected static function getFacadeAccessor(){
		return new \App\Service\Category;
	}
}