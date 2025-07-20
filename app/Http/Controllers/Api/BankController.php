<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Bank;

class BankController extends Controller
{
    public function show(Request $req){
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
    }
    
    
    public function update(Request $req){
        $req->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
        ]);

        Bank::findOrFail($req->id)->update([
            'name' => $req->name,
            'phone' => $req->phone,
            'address' => $req->address,
        ]);

        // if($req->age < 18){
        //     return response()->json([
        //         'status'=> false,
        //         'message' => 'Age must be greater than 18',
        //     ], 406);
        // }

        return response()->json([
            'status'=> true,
            'message' => 'Data updated Successfully',
        ], 200);
    }
    
    
    public function delete(Request $req){
        Bank::findOrFail($req->id)->delete();

        return response()->json([
            'status'=> true,
            'message' => 'Data deleted Successfully',
        ], 200);
    }




    public function search(Request $req){
        if($req->option == 0){
            $data = Bank::where('name','like','%'.$req->search.'%')
            ->orWhere('phone','like','%'.$req->search.'%')
            ->orWhere('address','like','%'.$req->search.'%')
            ->orderBy('name','desc')
            ->get();
        }
        else if($req->option == 1){
            $data = Bank::where('name','like','%'.$req->search.'%')->get();
        }
        else if($req->option == 2){
            $data = Bank::where('phone','like','%'.$req->search)->get();
        }
        else if($req->option == 3){
            $data = Bank::where('address','like',$req->search.'%')->get();
        }
        

        return response()->json([
            'status'=> true,
            'data'=>$data
        ], 200);
    }
}
