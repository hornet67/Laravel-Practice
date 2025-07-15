<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function show(Request $req){
        // $student = Student::where('phone','like','%12%')->get();
        // $student = Student::get();
        $name = "Bank";
        if($req->ajax()){
            return view('bank.ajaxBlade',compact('name'));
        }
        return view('bank.main',compact('name'));
        
        // return view('main-content.student',['student'=>$student]);
    }
    
    
    public function add(Request $req){
        $req->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required',
        ]);

        Student::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
        ]);

        return 'Succeessfully Added';
    }
    
    
    public function edit(Request $req){
        $student = Student::findOrFail($req->id);

        return view('main-content.editStudent',compact('student'));
        // return $student;
    }
    
    
    public function update(Request $req){
        $req->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required',
        ]);

        Student::findOrFail($req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
        ]);

        return 'Succeessfully Updated';
    }
    
    
    public function delete(Request $req){
       Student::findOrFail($req->id)->delete();
        // Student::where('email',$req->email)->delete();
       return 'Succeessfully Deleted';
    }
}
