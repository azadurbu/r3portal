<?php

namespace App\Http\Controllers;

use FFI\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
    }

    public function viewProfile()
    {
        $user = Auth::user();
        $user_info = DB::table('user_info')
        ->leftJoin('users', 'user_info.user_id', '=', 'users.id')
        ->where('users.id',$user->id)
        ->first();
        return view('profile.view',compact('user_info'));
    }
}