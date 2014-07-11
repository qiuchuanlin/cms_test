<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Get custom ImageFacade
 */
class ImageFacade extends Facade{
	
	protected static function getFacadeAccessor(){
		return new \App\services\Image;
	}
}