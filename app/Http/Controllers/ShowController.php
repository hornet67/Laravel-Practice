<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showBank(Request $req){
        $name = "Bank";
        if($req->ajax()){
            return view('bank.ajaxBlade',compact('name'));
        } 
        return view('bank.main',compact('name'));
    }



    public function showStudent(Request $req){
        // $student = Student::where('phone','like','%12%')->get();
        $name = "Student";
        if($req->ajax()){
            return view('student.ajaxBlade',compact('name'));
        }
        return view('student.main',compact('name'));
        // return view('main-content.student',['student'=>$student]);
    }


    public function showSubject(){
        $name = "Subject";
        if($req->ajax()){
            return view('subject.ajaxBlade',compact('name'));
        }
        return view('subject.main',compact('name'));
    }



}
