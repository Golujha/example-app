<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data['courses']=Course::paginate(6);
        $data['title'] = "Features";
        return view("home",$data);
    }

}
