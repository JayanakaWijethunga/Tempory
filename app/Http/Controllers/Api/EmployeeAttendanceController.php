<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\EmployeeAttendanceResource;
use App\EmployeeAttendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeAttendanceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
        
    }


    public function index():EmployeeAttendanceResource
    {

        return new EmployeeAttendanceResource(EmployeeAttendance::where('user_id',auth()->guard('api')->user()->id)->first());
        

    }
}
