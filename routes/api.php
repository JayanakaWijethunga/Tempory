<?php

use Illuminate\Http\Request;

/*Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::apiResource('/employeeAttendance','Api\EmployeeAttendanceController');
