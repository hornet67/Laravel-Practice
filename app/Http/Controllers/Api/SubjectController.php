<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function show(){
        $name = "Show Page";
        return view('main-content.users',compact('name'));
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
