<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class DepartmentsController extends Controller
{
    public function index(){

        // Fetch departments
        $departmentData['data'] = Departments::orderby("name","asc")
        			   ->select('id','name')
        			   ->get();

        // Load index view
    	return view('index')->with("departmentData",$departmentData);
    }

    // Fetch records
    public function getEmployees($departmentid=0){

    	// Fetch Employees by Departmentid
        $empData['data'] = Employees::orderby("name","asc")
        			->select('id','name')
        			->where('department',$departmentid)
        			->get();
  
        return response()->json($empData);
     
    }
}