<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class SendNotificationoEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notfemail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $notify_user = DB::table('users')->where('notification_status','0')->get();
        foreach($notify_user as $item){
            // info($item->id);
            // info($item->email);
            $mail = new PHPMailer(true); 
            $fromEmail = 'no-reply@r3stemcell.com';
            $toEmail = 'razadur@gmail.com';
            $subject = "New User Welcome Email";
            $message = '
            <b>Welcome to R3 Portal.</b>
            <br>Url: '. URL::to('login').'
            <br>User: '.$item->email.'
            <br>Pass: Abcd1234

            <br>We look forward to hearing from you and participating in your success.
            <br><br><b>Sincerely,</b>
            <br><br><b>David Greene, MD, MBA</b>
            <br><br><b>dgreene@r3stemcell.com</b>
            <br><br><b>(844) GET-STEM</b>';
            
            try {                
                //Recipients
                $mail->setFrom($fromEmail);
                $mail->addAddress($toEmail);
                $mail->IsHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $message;
                if($mail->send()){
                    DB::table('users')->where('id', $item->id)->update(['notification_status' => '1']);
                    $success='Email Sent to '.$toEmail;
                }
            } catch (Exception $e) {
                $success = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            info($success);
        }
        return 0;
    }
}
