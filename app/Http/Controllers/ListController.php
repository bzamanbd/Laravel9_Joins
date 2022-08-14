<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    function showData(){
        return DB::table('employee')
        ->join('company', 'employee.id','=', 'company.employee_id')
        ->where('employee.id',2)
        ->get();
    }
}