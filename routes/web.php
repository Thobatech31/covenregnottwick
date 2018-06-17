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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/adminpage', 'AdminController@index');

Route::get('/', 'PagesController@index');
Route::get('/trainingcheckout', 'PagesController@trainingcheckout');
Route::get('/onVisitCheckout', 'PagesController@onVisitCheckout');
Route::get('/WorkSpaceCheckout', 'PagesController@WorkSpaceCheckout');
Route::get('/adminpage', 'PagesController@adminpage');


Route::post('/register', 'RegistersController@register');
Route::post('/register2', 'RegistersOnvisitController@register2');
Route::post('/register3', 'RegistersWorkSpaceController@register3');
Route::get('/NewWorkSpace', 'WorkSpaceController@NewWorkSpace');


Route::get('/trainingcheckout', 'TrainingSearchController@index');
Route::get('/checkouttraining', 'TrainingSearchController@action')->name('checkouttraining');
Route::get('/checkoutForTraining/{id}', 'CheckedOutController@CheckedOut')->name('checkoutForTraining');


Route::get('/visitcheckout', 'VisitSearchController@index');
Route::get('/checkoutvisit', 'VisitSearchController@action')->name('checkoutvisit');
Route::get('/checkoutForVisit/{id}', 'CheckedOutController@CheckedOutVisit')->name('checkoutForVisit');


Route::get('/checkoutworkspaces', 'CheckoutWorkSpaceSearchController@index');
Route::get('/WorkSpacecheckout', 'CheckoutWorkSpaceSearchController@action')->name('WorkSpacecheckout');
Route::get('/checkoutForNewWorkSpace/{id}', 'CheckedOutController@CheckedOutNewWorkSpace')->name('checkoutForNewWorkSpace');


//fetch data from the database route
Route::get('/trainingtabledata', 'TrainingDatabaseDataController@getData')->name('trainingtabledata');
Route::get('trainingtabledata/fetchData', 'TrainingDatabaseDataController@fetchData')->name('trainingtabledata.fetchData');
Route::get('/onvisittabledata', 'OnvisitDatabaseDataController@getData')->name('onvisittabledata');
Route::get('onvisittabledata/fetchData', 'OnvisitDatabaseDataController@fetchData')->name('onvisittabledata.fetchData');
Route::get('/newworkspacedata', 'NewWorkSpaceDatabaseDataController@getData')->name('newworkspacedata');;
Route::get('newworkspacedata/fetchData', 'NewWorkSpaceDatabaseDataController@fetchData')->name('newworkspacedata.fetchData');



//Route::get('/covenspace', 'PagesController@covenspaces');
//Route::get('/covenspace', 'PagesController@covenspaces');


