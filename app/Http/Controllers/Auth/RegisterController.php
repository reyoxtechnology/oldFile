<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use Validator;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    //user login
    public function registerUser(Request $request){
        //users,agent,admin login 

        try{
            $role = Role::where('name','=','user')->first();

            $validator = Validator::make($request->all(),[
                'name'=>'required',
                'email'=> 'required|unique:users',
                'password'=>'required',
                'phoneNumber'=>'required'
            ]);

            if($validator->fails()){
                return response([
                    'error' =>$validator->errors()->all()
                ], 422);
            }

            $request['password'] = Hash::make($request['password']);
            $request['remember_token'] = Str::random(10); 
            $user= User::create($request->toArray());
            $user->attachRole($role);
               

            return response()->json([
                'status_code' =>200,
                'message' => 'Registration successful'
            ]);
            


        }catch (Exception $error){

            return response()->json([
                'status_code' =>500,
                'message' => 'Error in Registration',
                'error'=> $error
            ]);
            

        }
       


   
    }

    //agent login
    public function registerAgent(Request $request){
        
        //users,agent,admin login 

        try{
            $role = Role::where('name','=','agent')->first();

            $validator = Validator::make($request->all(),[
                'name'=>'required',
                'email'=> 'required|unique:users',
                'password'=>'required',
                'phoneNumber'=>'required',
                'AccountNumber'=>'required',
                'BankName'=>'required'
            ]);

            if($validator->fails()){
                return response([
                    'error' =>$validator->errors()->all()
                ], 422);
            }

            $request['password'] = Hash::make($request['password']);
            $request['remember_token'] = Str::random(10); 
            $user= User::create($request->toArray());
            $user->attachRole($role);

            return response()->json([
                'status_code' =>200,
                'message' => 'Registration successful'
            ]);
            


        }catch (Exception $error){

            return response()->json([
                'status_code' =>500,
                'message' => 'Error in Registration',
                'error'=> $error
            ]);
            

        }
       


    }

    //admin dashboard
    public function registerAdmin(Request $request){

        
        try{
            $role = Role::where('name','=','admin')->first();

            $validator = Validator::make($request->all(),[
                'name'=>'required',
                'email'=> 'required|unique:users',
                'password'=>'required',
                'phoneNumber'=>'required'
            ]);

            if($validator->fails()){
                return response([
                    'error' =>$validator->errors()->all()
                ], 422);
            }

            $request['password'] = Hash::make($request['password']);
            $request['remember_token'] = Str::random(10); 
            $user= User::create($request->toArray());
            $user->attachRole($role);
               

            return response()->json([
                'status_code' =>200,
                'message' => 'Registration sucessful'
            ]);
            


        }catch (Exception $error){

            return response()->json([
                'status_code' =>500,
                'message' => 'Error in Registration',
                'error'=> $error
            ]);
            

        }
       

    }

}
