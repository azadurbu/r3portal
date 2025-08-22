<?php

namespace App\Http\Controllers;

use FFI\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    {
        $menus = DB::table('menu')->get();
        return view('menu.list',compact('menus'));
    }

    public function create()
    {
        $menus = DB::table('menu')->whereNull('parent_id')->get();
        return view('menu.create',compact('menus'));
    }

    public function save(Request $request)
    {
        try{
            DB::table('menu')->insert([
                'name' => $request->name,
                'url'=> $request->url,
                'parent_id' => $request->parent,
                'serial_after' => $request->serial_after == null ? 0 : $request->serial_after,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect('menu-create')->with('msg-success', 'Saved successfully!');
        }catch(Exception $e){
            $msg = (env('APP_DEBUG')) ? $e->getMessage() : $this->_failedMsg;
            return redirect()->back()->withInput()->with('msg-error',  $msg);
        }
    }
    public function user()
    {

        $user_menus = DB::select(
            DB::raw("
                SELECT  ut.type, m.name, m.url, mu.status FROM menu_user mu 
                LEFT JOIN user_type ut ON mu.user_type = ut.id
                LEFT JOIN (SELECT * FROM menu WHERE parent_id IS NULL) m 
                ON mu.menu_id = m.id WHERE mu.status = 1
            ")
        );
        return view('menu.menu-user-list', compact('user_menus'));
    }
    
    public function userMenuCreate()
    {
        $user_type = $this->userType();
        $menus = DB::table('menu')->whereNull('parent_id')->get();
        return view('menu.menu-user-create', compact('user_type','menus'));
    }

    public function userMenuSave(Request $request)
    {
        try{
            DB::table('menu_user')->insert([
                'user_type' => $request->type,
                'menu_id'=> $request->menu,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect('user-menu-create')->with('msg-success', 'Saved successfully!');
        }catch(Exception $e){
            $msg = (env('APP_DEBUG')) ? $e->getMessage() : $this->_failedMsg;
            return redirect()->back()->withInput()->with('msg-error',  $msg);
        }
    }
}