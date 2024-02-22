<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function openprofile(){
        $users = DB::table('users')->get();
        return response()->json($users);
    }
}
