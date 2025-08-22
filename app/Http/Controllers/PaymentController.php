<?php

namespace App\Http\Controllers;

use FFI\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = DB::table('payment')->get();
        return view('payment.list', compact('payment'));
    }
    public function create()
    {
        return view('payment.create');
    }
    public function store(Request $request)
    {
        if($request->token == "!@#patient-%-Portal-%-Payment$%^" ){
            // dd($request->all());
            try{
                DB::table('payment')->insert([
                    'payment_id' => $request->payment_id,
                    'f_name'=> $request->f_name,
                    'l_name' => $request->l_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'total_pay' => $request->total_pay,
                    'transection_id' => $request->transection_id,
                    'reg_date' => $request->reg_date,
                    'status' =>  $request->status,
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
                return 'Saved successfully!';
            }catch(Exception $e){
                $msg = (env('APP_DEBUG')) ? $e->getMessage() : $this->_failedMsg;
                return redirect()->back()->withInput()->with('msg-error',  $msg);
            }
        }else{
            return "You are not permitted to be here.";
        }
    }
}