<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function openprofile($id)
    {
        $users = DB::table('users')->find($id);
        return response()->json($users);
    }
}