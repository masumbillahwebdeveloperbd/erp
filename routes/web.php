<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin-login','HomeController@admin_login')->name('admin_login');
Route::post('admin-login','HomeController@admin_login_submit')->name('admin_login_submit');
Route::get('dashboard','AdminController@dashboard')->name('dashboard');
Route::get('logout','AdminController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('add-group-information','Admin\GroupInfoController@index')->name('group.info');
Route::post('save-group-information','Admin\GroupInfoController@storeOrUpdate')->name('s');
Route::post('edit-delete-group-information/{id}',
	'Admin\GroupInfoController@editOrDelete')->name('edit.delete');


/*********************start admin Route*********************/
Route::prefix('admin')->group(function(){
Route::resource('department','Admin\DepartmentController');
Route::resource('buyer-profile','Admin\BuyerProfileController');
Route::resource('supplier-profile','Admin\SupplierProfileController');
Route::resource('other-party-profile','Admin\OtherPartyProfileController');
Route::resource('capacity-allocation','Admin\CapacityAllocationController');
Route::resource('capacity-calculation','Admin\CapacityCalculationController');
Route::resource('composition-entry','Admin\CompositionEntryController');
Route::resource('financial-parameter-setup','Admin\FinancialParameterSetupController');
Route::resource('germents-sample-entry','Admin\GermentsSampleEntryController');
Route::resource('marketing-team-info','Admin\MarketingTeamInfoController');
Route::resource('other-party-profile','Admin\OtherPartyProfileController');

});

/*********************end admin Route*********************/




