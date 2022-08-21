<?php

use Modules\Hrm\Http\Controllers\EmployeeController;
use Modules\Hrm\Http\Controllers\DesignationController;


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function (){
    Route::resource('employees', EmployeeController::class);
    Route::resource('designations', DesignationController::class);
});
