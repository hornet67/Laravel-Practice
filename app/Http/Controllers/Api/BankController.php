<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Bank;

class BankController extends Controller
{
    public function show(Request $req){
        $name = "Bank";
        if($req->ajax()){
            return view('bank.ajaxBlade',compact('name'));
        } 
        return view('bank.main',compact('name'));
    }



    public function showData(Request $req){
        $data = Bank::get();

        return response()->json([
            'status'=> true,
            'data' => $data,
        ], 200);
    }
    
    
    public function add(Request $req){
        $req->validate([
            'name'=> 'required',
            'address'=> 'required',
            'phone'=> 'required',
        ]);

        Bank::create([
            'name' => $req->name,
            'phone' => $req->phone,
            'address' => $req->address,
        ]);

        return response()->json([
            'status'=> true,
            'message' => 'Data added Successfully',
        ], 200);
    }
    
    
    public function edit(Request $req){
        $data = Bank::findOrFail($req->id);

        return response()->json([
            'status'=> true,
            'data'=>$data
        ], 200);
        // return view('main-content.editStudent',compact('student'));
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
