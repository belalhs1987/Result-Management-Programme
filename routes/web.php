<?php
use App\Event\firstEvent;

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
/*App::bind("App\developer\contact_info", function($app){
	return new App\developer\contact_info(config('services.Developed_By'));
});*/
//$contact=App::make('App\developer\contact_info');
//dd($contact);
Route::get('/', function () {
    return view('index');
});
Route::get('userRegisterForm','loginController@userRegisterForm');
Route::post('register','loginController@register');
Route::post('login','loginController@login');
Route::get('logout','loginController@logout');
Route::get('forgetPassword','loginController@forgetPassword');
 Route::post('inputForRecoverPassword','loginController@recoverPasswordMethod');
 Route::get('recoverypassword/{token}','loginController@recoveryPassword'); 
 Route::post('updatePassword','loginController@updatePasswordMethod');
//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' =>'loginCheck'], function(){

		Route::get('homepage', function(){
		return view('homepage');
		}); 
		Route::get('insertHomePage',function(){
			return view('insertHomePage');
		});
		Route::get('viewHomePage',function(){
			return view('viewHomePage');
		});
		Route::get('/event',function(){
			event(new firstEvent('Hello This a event.'));
		});

		Route::get('huResultInsertForm','resultController@huInsert');
		Route::get('bsResultInsertForm','resultController@bsInsert');
		Route::get('scResultInsertForm','resultController@scInsert');
		Route::post('ScInsertMarks','resultController@ScInsertMarks');
		Route::post('bsInsertMarks','resultController@BsInsertMarks');
		Route::post('huInsertResult','resultController@huInsertResult');
		  Route::get('/huFullResultdownload','downloadController@huFullResultdownload');
		  Route::get('/scFullResultdownload','downloadController@scFullResultdownload');
		  Route::get('/bsFullResultdownload','downloadController@bsFullResultdownload'); 
		 Route::get('huResultView','resultController@huResultView');
		 Route::get('bsResultView','resultController@bsResultView');
		 Route::get('scResultView','resultController@scResultView');
		Route::get('huEditResult/{roll}','resultController@huEditResult');
		Route::get('bsEditResult/{roll}','resultController@bsEditResult');
		Route::get('scEditResult/{roll}','resultController@scEditResult');
		Route::post('huUpdateForm','resultController@huUpdate');
		Route::post('bsUpdateForm','resultController@bsUpdate');
		Route::post('scUpdateForm','resultController@scUpdate');
		Route::get('deleteResult/{roll}','resultController@deleteResult');
		Route::get('bsDeleteResult/{roll}','resultController@bsDeleteResult');
		Route::get('scDeleteResult/{roll}','resultController@scDeleteResult');
		Route::get('resultCardDownload/{roll}','downloadController@resultCardDownload');
		Route::get('bsResultCardDownload/{roll}','downloadController@bsResultCardDownload');
		Route::get('scResultCardDownload/{roll}','downloadController@scResultCardDownload');
		Route::get('classPrac','resultController@classPrac');
		Route::get('/post','postController@postMethod');
		Route::post('/post_insert','postController@postInsert');
		Route::get('/user/{id}','postController@getUser');

});
