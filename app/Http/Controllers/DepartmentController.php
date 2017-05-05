<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //

    public function index()
    {
       $departments = Department::paginate();

       return view('departments.index',compact('departments'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|unique:departments,name',
            'code' => 'required|unique:departments,code',
        ]);
        $department = new Department();

        $department->name = $request->name;
        $department->code = $request->code;

        $department->save();

      //  dd("hollo world");
    }
}
