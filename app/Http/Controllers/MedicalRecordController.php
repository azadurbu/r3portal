<?php

namespace App\Http\Controllers;

use FFI\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $medical_history = DB::table('medical_history')
        ->where('user_id', Auth::user()->id)
        ->get();
        return view('medical-record.list', compact('medical_history'));
    }

    public function create()
    {
        return view('medical-record.create');
    }

    public function store(Request $request)
    {
        try{
            $fileName = time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('medical-record'), $fileName);
            DB::table('medical_history')->insert([
                'name' => $request->name,
                'type'=> $request->type,
                'user_id' => Auth::user()->id,
                'file' => $fileName,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect('medical-history')->with('msg-success', 'Saved successfully!');
        }catch(Exception $e){
            $msg = (env('APP_DEBUG')) ? $e->getMessage() : $this->_failedMsg;
            return redirect()->back()->withInput()->with('msg-error',  $msg);
        }
    }
    // public function user()
    // {

    //     $user_menus = DB::select(
    //         DB::raw("
    //             SELECT  ut.type, m.name, m.url, mu.status FROM menu_user mu 
    //             LEFT JOIN user_type ut ON mu.user_type = ut.id
    //             LEFT JOIN (SELECT * FROM menu WHERE parent_id IS NULL) m 
    //             ON mu.menu_id = m.id WHERE mu.status = 1
    //         ")
    //     );
    //     return view('menu.menu-user-list', compact('user_menus'));
    // }
    
    // public function userMenuCreate()
    // {
    //     $user_type = $this->userType();
    //     $menus = DB::table('menu')->whereNull('parent_id')->get();
    //     return view('menu.menu-user-create', compact('user_type','menus'));
    // }

    // public function userMenuSave(Request $request)
    // {
    //     try{
    //         DB::table('menu_user')->insert([
    //             'user_type' => $request->type,
    //             'menu_id'=> $request->menu,
    //             'status' => 1,
    //             'created_at' => date('Y-m-d H:i:s'),
    //         ]);
    //         return redirect('user-menu-create')->with('msg-success', 'Saved successfully!');
    //     }catch(Exception $e){
    //         $msg = (env('APP_DEBUG')) ? $e->getMessage() : $this->_failedMsg;
    //         return redirect()->back()->withInput()->with('msg-error',  $msg);
    //     }
    // }
}