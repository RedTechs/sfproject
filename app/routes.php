<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::resource('orders', 'OrdersController');

Route::resource('users', 'UsersController');

Route::resource('accounts', 'AccountsController');

Route::resource('products', 'ProductsController');

Route::get('/test', function() {
        try {
        	$account = Salesforce::describeLayout('Account');
            // print_r(Salesforce::describeLayout('Account'));
            return View::make('home')->with('account', $account);
            // return View::make('accounts.index', compact('accounts'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            die($e->getMessage() . $e->getTraceAsString());
        }
    });