<?php

/**
 * custom the auth filter redirect url 
 */
Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('admin/login');
});