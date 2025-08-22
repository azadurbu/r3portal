<?php
// namespace App\MyHelper;

// use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// class Helper
// {   
//     /**
//      * all clients information
//      */
//     public static function clients($id=null)
//     {
//         if($id != null){
//             return User::select('id','name', 'email')->whereRaw("type= 2 and status= 1 and id = $id")->first();
//         }else{
//         return User::select('id','name', 'email')->whereRaw("type= 2 and status= 1")->get();
//         }
//     }
    
// }

// function menu_user(){
//     $user = Auth::user();
//     $user_type = $user->type;
//     return $user_menus = DB::select(
//         DB::raw("
//         SELECT  m.id, ut.type, m.name, m.url, mu.status FROM menu_user mu
//         LEFT JOIN user_type ut ON mu.user_type = ut.id
//         LEFT JOIN (SELECT * FROM menu WHERE parent_id IS NULL) m ON mu.menu_id = m.id 
//         WHERE mu.status = 1 and m.status = 1 and mu.user_type = $user_type
//         ")
//     );
// }

// function sub_menu($id){
//     return $user_menus = DB::select(
//         DB::raw("
//         select name,url from menu where parent_id = $id and status = 1
//         ")
//     );
// }

// function user_type(){
//     $user = Auth::user();
//     $user_type = $user->type;
//     $user_menus = DB::select(
//         DB::raw("
//         select type from user_type where id = $user_type
//         ")
//     );
//     echo $user_menus[0]->type;
// }
// function user_type_by_type_id($id){
//     $user_menus = DB::select(
//         DB::raw("
//         select type from user_type where id = $id
//         ")
//     );
//     echo $user_menus[0]->type;
// }
?>