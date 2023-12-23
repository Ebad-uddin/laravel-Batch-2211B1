<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function register(){
        return view('register');
    }
    public function create(Request $request){
        print_r($request->all());
        return view('register');
    }
}
