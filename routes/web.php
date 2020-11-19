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
    Route::get('/','HomeController@index');
    Route::get('/About','AboutController@about')->name('About');
    Route::get('/Contact','AboutController@contact')->name('Contact');
    Route::post('/Contactinsert','AboutController@create')->name('Contactinsert');
    Route::get('/uidetails/{id}','HomeController@getuiallinfo')->name('uidetails');
    Route::get('/Mobiledetails/{id}','HomeController@getmobileallinfo')->name('Mobiledetails');
    Route::get('/Webdetails/{id}','HomeController@getweballinfo')->name('Webdetails');

    Route::get('/portfortfoliopage','HomeController@portfolioindividualpage')->name('portfortfoliopage');
    Route::get('/Teampage','HomeController@teamindividualpage')->name('Teampage');
   
    
   
Route::group(['middleware' =>['auth']],function(){

    Route::get('/logout','AdminDashboardController@logout')->name('logout');
    Route::get('/dashboard','AdminDashboardController@dashboard')->name('dashboard');

    //Start Web Portfolio
    Route::get('/PortfolioAdd','PortfolioController@create')->name('PortfolioAdd');
    Route::post('/Portfolioinsert','PortfolioController@index')->name('Portfolioinsert');
    Route::get('/Portfoliolist','PortfolioController@getportfolio')->name('Portfoliolist');
    Route::post('/PortfoliostatusUpdate','PortfolioController@portfolioUpdate')->name('PortfoliostatusUpdate');
    Route::get('/Delete-portfolio/{id}','PortfolioController@portfolioDelete')->name('PortfolioDelete');
    //finished Web Portfolio

   //start mobile Portfolio
   Route::get('/MobilepageAdd','MobileController@create')->name('MobilepageAdd');
   Route::post('/MobileInsert','MobileController@index')->name('MobileInsert');
   Route::get('/MobileList','MobileController@GetMobilelist')->name('MobileList');
   Route::post('/MobileStatusUpdate','MobileController@GetMobileliststatus')->name('MobileStatusUpdate');
   Route::get('/Delete-Mobile/{id}','MobileController@deletemobile')->name('deletemobile');
     //finished MObile Porftolio

     //start Ui Portfolio
     Route::get('/UipageAdd','UiController@create')->name('UipageAdd');
     Route::post('/UiInsert','UiController@index')->name('UiInsert');
     Route::get('/AllUiList','UiController@GetUilist')->name('AllUiList');
     Route::post('/UiStatusUpdate','UiController@GetUiliststatus')->name('UiStatusUpdate');
     Route::get('/Delete-Ui/{id}','UiController@deleteui')->name('UiDelete');
     //finished Ui Portfolio

     //start client add
     Route::get('/clientpageAdd','ClientController@pageadd')->name('clientpageAdd');
     Route::post('/clientinsert','ClientController@create')->name('clientinsert');
     Route::get('/Allclient','ClientController@getallclient')->name('Allclient');
     Route::post('/changeClientstatus','ClientController@changeclientstatus')->name('changeClientstatus');
     Route::get('/Delete-client/{id}','ClientController@deleteclient')->name('delete-client');
     //finished testimonials

     //start Testimonials
     Route::get('/Testimonialpageadd','TestimonialsController@testimonialspageadd')->name('Testimonialpageadd');
     Route::post('/TestimonialInsert','TestimonialsController@create')->name('TestimonialInsert');
     Route::get('/AllTestimonial','TestimonialsController@GetAllTestimonials')->name('AllTestimonial');
     Route::post('/changetestmonialstatus','TestimonialsController@changestatus')->name('changetestmonialstatus');
     Route::get('/Delete-Testimonials/{id}','TestimonialsController@delettestimonials');
     //finished Testimonials
      
     //start Team
     Route::get('/TeampageAdd','TeamController@teampageadd')->name('TeampageAdd');
     Route::post('/TeamdataAdd','TeamController@create')->name('TeamdataAdd');
     Route::get('/AllMember','TeamController@GetAllMember')->name('AllMember');
     Route::post('/changeteamstatus','TeamController@changestatus')->name('changeteamstatus');
     Route::get('/Delete-Team/{id}','TeamController@deleteteam');
     //Finished Team

     //Allusercontact information

     Route::get('/AllContactUser','AboutController@getallContactuser')->name('AllContactUser');
     Route::get('/Delete-Contact/{id}','AboutController@deletecontact');

   

});




