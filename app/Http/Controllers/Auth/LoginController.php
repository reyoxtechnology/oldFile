<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    //login in 
    public function login(Request $request){
        try{
             $request->validate([
                'email' => 'email|required',
                'password'=>'required'
             ]);
           
             $credentials = request(['email','password']);
             if(!Auth::attempt($credentials)){
                 return response()->json([
                    'status_code' => 422,
                    'message' => 'Unauthorized',
                 ]);
             }
             $user= User::where('email',$request->email)->first();
             if(!Hash::check($request->password,$user->password ,[])){
                 return response()->json([
                    'status_code' => 422,
                    'message' => 'Password Match',
                 ]);
             }
             $tokenResult =$user->createToken('token')->plainTextToken;
             return response()->json([
                'status_code' => 200,
                'message' => 'Login Successful',
                'token_type'=>$tokenResult

             ]);
             
        }
        catch (Exception $error){
            return response()->json([
                'status_code' =>500,
                'message' => 'Login not Successful',
                'error'=> $error
            ]);
        }
        
    }

    //authentication
   public function authenticatedUser(Request $request){
        return $request->user();
   }

   //logout 
   public function logout(){

 
        $user = request()->user(); //or Auth::user()

        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
        
    return response()->json([
        'message' => 'Successfully logged out',
        'user'=>$user
        ]);
   }

}
