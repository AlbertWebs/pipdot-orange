<?php

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;

use Auth;

class CoursesController extends Controller
{
    public function course($slung){
        $Course = Course::where('slung',$slung)->get();
        foreach ($Course as $key => $value) {
            # code...
            $page_title = $value->title;
            return view('front.course',compact('Course','page_title'));
        }
        

    }

    public function register(){
        if(Auth::user()){
                $page_title = Auth::user()->name;
                return view('students.index',compact('page_title'));
        }else{
                $page_title = 'Sign Up';
                return view('front.register',compact('page_title'));
            }

    }

    public function login(){
        if(Auth::user()){
            
                $page_title = Auth::user()->name;
                return view('students.index',compact('page_title'));
        }else{
                # code...
                $page_title = 'Sign In';
                return view('front.login',compact('page_title'));
            
            
        }
        

    }

    public function forgot(){
        if(Auth::user()){
            
                $page_title = Auth::user()->name;
                return view('students.index',compact('page_title'));
        }else{
                # code...
                $page_title = 'Sign In';
                return view('front.forgotpasswod',compact('page_title'));
            
            
        }
        

    }

    

    
}
