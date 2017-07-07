<?php



use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', function () {
    return view('laravel');
});


Route::get('user/{name?}', function ($name = null) {

    return $name;
});
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/sendingmails',function(){



	$data = [
		'title'=>'First Email Using Laravel framework',
		'content'=>'Dummy content for first emails'
	];

Mail::send('emails.test', $data , function($message){

$message->to('naveedanwar152@gmail.com','Naveed')->subject('Email subject');

});

return "Sending Mails";

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
//--------------------------------------Routes-------------------------------------------
//Home route
Route::get('/home', 'HomeController@index');

// Route with regular expression and naming
Route::get('/routes/{id?}',function($id=null){
	return "Routing in Laravel 5.3   " .  $id;
})->where('id','[0-9]+')->name('profile');

// controller for testing name of route::profile
Route::get('/naming','testingRoutes@namingRoutes');

//Prefixing routes name
Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function ()    {
    		
    		return "Users routing with admin prefixes";
    });
});

Route::get('/logout','Auth\LoginController@logout');
Route::get('/age',function(){
	return "Age middlew";
})->middleware('test:admin');



Route::get('/partial','productController@getIndex');
Route::get( '/settings/new', array(
    'as' => 'settings.new',
    'uses' => 'SettingsController@add'
) );
 
//Settings: create a new setting
Route::post( '/settings', array(
    'as' => 'settings.create',
    'uses' => 'SettingsController@create'
) );