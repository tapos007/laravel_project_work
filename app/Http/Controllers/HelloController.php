<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {

        $department = new Department();
        $department->name = "computer science & engineering";
        $department->code = 'cse';
       return $department->save();
    }
}
