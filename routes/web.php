<?php

use Illuminate\Support\Facades\Route;

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

// Route::group(['middleware' =>['guest']],function(){
//     Route::post('/loginpage','AuthController@login')->name('loginpage');
//     Route::get('/login','AuthController@index')->name('login');
// });


    
    Route::post('/loginpage','AuthController@login')->name('loginpage');
    Route::get('/login','AuthController@index')->name('login');
    Route::get('/','HomeController@index')->name('home');
   
Route::group(['middleware' =>['auth']],function(){

    Route::get('/logout','AdminDashboardController@logout')->name('logout');
    Route::get('/dashboard','AdminDashboardController@dashboard')->name('dashboard');

    //Start Web Portfolio
    Route::get('/PortfolioAdd','PortfolioController@create')->name('PortfolioAdd');
    Route::post('/Portfolioinsert','PortfolioController@index')->name('Portfolioinsert');
    Route::get('/Portfoliolist','PortfolioController@getportfolio')->name('Portfoliolist');
    Route::post('/PortfoliostatusUpdate','PortfolioController@portfolioUpdate')->name('PortfoliostatusUpdate');
    Route::get('/PortfolioDelete/{id}','PortfolioController@portfolioDelete')->name('PortfolioDelete');
  
});




