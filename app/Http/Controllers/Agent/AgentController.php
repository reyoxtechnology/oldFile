<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class AgentController extends Controller
{
    //
    public function getAllAgent(){
    
        $users=Role::where('name','agent')->first()->users()->get();
        return response()->json([
            'user'=>$users
        ]);

    }

    public function generateQuote(){

    }

}
