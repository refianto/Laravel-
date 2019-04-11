<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('')->group(function()
{
	Route::resource('/', 'SiteController');
	Route::get('/reward', 'SiteController@reward');
	Route::get('/shop', 'SiteController@shop');
	Route::get('/home', function ()
	{
		if (Auth::guard('admin')->check() == true) {
			return redirect('admin');
		}elseif (Auth::guard('web')->check() == true) {
			return redirect('/');
		}
	});

	Route::get('auth', function ()
	{
		return view('home');
	});
});


Route::prefix('admin')->group(function ()
{
	Route::resource('/pembelian', 'PembelianController');
	Route::resource('/produk', 'ProdukController');
	Route::resource('/reward', 'RewardController');
	Route::get('/', function ()
	{
		return view('backend/pages/dashboard');
	});

});

Auth::routes();
