<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Student;

class StudentController extends Controller
{
    



    public function show(Request $req){
        $data = Student::get();

        return response()->json([
            'status'=> true,
            'data' => $data,
        ], 200);
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
