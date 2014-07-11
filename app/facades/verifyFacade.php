<?php
namespace App\Facades;
use Illuminate\support\Facades\Facade;

/**
 * 创建验证码类的Facade
 */
class VerifyFacade extends Facade{
	protected static function getFacadeAccessor(){
		return new \App\Services\Verify;
	}
}