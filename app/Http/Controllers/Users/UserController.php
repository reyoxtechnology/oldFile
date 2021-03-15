<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function getAlluser(){
        $users=Role::where('name','user')->first()->users()->get();
        return response()->json([
            'user'=>$users
        ]);
    }


    public function listOfOnlineAgent(){
        $users=Role::where('name','agent')->first()->users()->where('status','online')->get();
        return response()->json([
            'user'=>$users
        ]);
    }

    public function viewQuoatation(){

    }

    public function acceptQuoation(){

    }
    public function declineQuoation(){
        
    }
    
}
