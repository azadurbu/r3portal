<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $appointment = DB::table('lead')
        ->selectRaw('users.name patient,users.email, provider.name provider,provider.email provider_email,apt_date,apt_time')
        ->leftJoin('users', 'lead.user_id', '=', 'users.id')
        ->leftJoin('users as provider', 'lead.provider_id', '=', 'provider.id')
        ->where('lead.user_id',$user->id)
        ->first();
        // dd($appointment);
        return view('admin.dashboard',compact('appointment'));
    }

    public function sendEmail()
    {
        $notify_user = DB::table('users')->where('notification_status','0')->get();
        foreach($notify_user as $item){
            echo '<br>'.$item->id;
            echo '<br>'.$item->email;

            DB::table('users')
            ->where('id', $item->id)
            ->update(['notification_status' => '1']);

        }
        dd($notify_user);
        // return 'Azad';
        $mail = new PHPMailer(true); 
        $fromEmail = 'azad@nochallenge.net';
        $toEmail = 'razadur@gmail.com';
        $subject = 'test email';
        echo $message = '
        <b>Welcome to R3 Portal.</b>
        <br>Url:
        <br>User:
        <br>Pass:

        <br>We look forward to hearing from you and participating in your success.
        <br><br><b>Sincerely,</b>
        <br><br><b>David Greene, MD, MBA</b>
        <br><br><b>dgreene@r3stemcell.com</b>
        <br><br><b>(844) GET-STEM</b>';
        die;
        try {
            
            //Recipients
            $mail->setFrom($fromEmail);
            
            $mail->addAddress($toEmail);
            $mail->IsHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();
            $success='Email Sent Successfully';
        } catch (Exception $e) {
            echo $success = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        return redirect('home')->with('msg-success', $success);
        // return view('email.form');
    }
}
