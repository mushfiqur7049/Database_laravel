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
Route::get('/','homepagecontroller@index');
Route::get('/users','homepagecontroller@index2');
Route::get('/adminlogin','homepagecontroller@index3')->name('adminlogin');
Route::post('/valid','homepagecontroller@index4')->name('valid');

Route::get('/admin','adminpages@admin1')->name('admin');
Route::get('/admin/add_users','adminpages@admin2')->name('admin.addusers');
Route::get('/admin/seeusers','adminpages@adminseeusers')->name('admin.seeusers');
Route::get('/admin/manage system','adminpages@adminmanage')->name('admin.manage');
Route::get('/admin/manage system/update/{Tax_id}','adminpages@adminupdate')->name('admin.manage.update');
Route::post('/admin/users_store','adminpages@adminusersstore')->name('admin.users_store');
Route::post('/admin/manage system/update/information/{Tax_id}','adminpages@adminupdateinfo')->name('admin.update.information');
Route::post('/admin/manage system/delete/information/{Tax_id}','adminpages@admindelate')->name('admin.delete.information');
// Route::get('/', function () {
//     return view('welcome');
// });

 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
