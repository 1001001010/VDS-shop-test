<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function openprofile($name)
    {
        $users = DB::table('users')->where('name', $name)->first();
        $name = $users->name;
        $email = $users->email;
        $data = $users->created_at;
        $balance = $users->balance;
        return response()->json(['name' => $name, 'email' => $email, 'data' => $data, 'balance' => $balance]);
    }
}