<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }


    public function login(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        dd($req->user());
        
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            $req->session()->regenerate();
            // dd($req);
            $user = Auth::user();
            $token = $user->createToken('API Token')->plainTextToken; // Create new api-token
            
            return response()->json([
                'status' => true,
                'notice' => 'User Logged in Successfully',
                'token' => $token,
                'token_type' => 'bearer'
            ], 200);
        }

        return response()->json([
            'status' => false,
            'notice' => 'Email or Password is incorrect.',
        ], 401);
    }



    // Logout Function
    public function Logout(Request $req){
        $user = $req->user();
        $currentToken = $req->bearerToken();
        $tokenId = explode('|', $currentToken)[0];

        if ($currentToken) {
            $user->tokens()->where('id', $tokenId)->delete();
        }
        
        Auth::guard('web')->logout();

        
        // $user->tokens()->delete();
        session()->invalidate();
        session()->regenerateToken();
        // session()->flush();
        
        return response()->json([
            'status' => true,
            'message' => 'Logged out Successfully',
        ], 200);
    } // End Method
}
