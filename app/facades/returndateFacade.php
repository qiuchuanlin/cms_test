<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class ReturnDateFacade extends Facade{
	protected static function getFacadeAccessor(){
		return new \App\Services\ReturnDate;
	}
}