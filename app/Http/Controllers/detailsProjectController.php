<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailsProjectController extends Controller
{
    protected function index(){
        return view('project-detail');
    }
}
