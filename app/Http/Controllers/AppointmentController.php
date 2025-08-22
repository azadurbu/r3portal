<?php

namespace App\Http\Controllers;

use FFI\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function index()
    {
    }

    public function viewAppointment()
    {
        $user = Auth::user();
        $appointment = DB::table('lead')
        ->selectRaw('users.name patient,users.email, provider.name provider,provider.email provider_email,apt_date,apt_time')
        ->leftJoin('users', 'lead.user_id', '=', 'users.id')
        ->leftJoin('users as provider', 'lead.provider_id', '=', 'provider.id')
        ->where('lead.user_id',$user->id)
        ->get();
        return view('appointment.view',compact('appointment'));
    }
}