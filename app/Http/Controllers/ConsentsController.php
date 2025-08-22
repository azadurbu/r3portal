<?php

namespace App\Http\Controllers;

use FFI\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConsentsController extends Controller
{
    public function index()
    {
        $user = DB::table('user_info')->where('user_id',Auth::user()->id)->first();
        return view('consent.index',compact('user'));
    }
    public function signStore(Request $request){
        echo strlen($request->usersign);
        try{
            DB::table('user_info')
            ->where('user_id',Auth::user()->id)
            ->update([
                'sign' => $request->usersign
            ]);
            return redirect('consents-view')->with('msg-success', 'Saved successfully!');
        }catch(Exception $e){
            $msg = (env('APP_DEBUG')) ? $e->getMessage() : $this->_failedMsg;
            return redirect()->back()->withInput()->with('msg-error',  $msg);
        }
    }
}