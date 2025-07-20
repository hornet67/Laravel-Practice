<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function show(Request $req){
        $data = Subject::get();

        return response()->json([
            'status'=> true,
            'data' => $data,
        ], 200);
    }
    
    
    public function add(){
        $name = "Add Page";
        return view('welcome',compact('name'));
    }
    
    
    public function edit(){
        $name = "Edit Page";
        return view('welcome',compact('name'));
    }
    
    
    public function update(){
        $name = "Update Page";
        return view('welcome',compact('name'));
    }
    
    
    public function delete(){
        $name = "Delete Page";
        return view('welcome',compact('name'));
    }
}
