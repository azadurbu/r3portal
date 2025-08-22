<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\User;
use Illuminate\Support\Facades\Hash;

class SynLead extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Syn:Lead';

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
        
        try {

            $clientList = $this->getClientList();
            foreach ($clientList as $client) {

                try {
                    $opurtunity = $this->getOpportunities($client->ghl_api_key);
                    try {
                        $this->generateLeads($opurtunity,$client->ghl_api_key);
                    } catch (\Exception $e) {

                        $this->info('1 '.$e->getMessage());
                        \Log::info('function generateLeads: '.$e->getMessage());
                    }

                } catch (\Exception $e) {
                    $this->info('2 '.$e->getMessage());
                    \Log::info('function getOpportunities:'.$e->getMessage());

                    //return ;
                }

                
            }

        } catch (\Exception $e) {

            $this->info('3 '.$e->getMessage());
            \Log::info('function getClientList:'.$e->getMessage());
        }
        
        //$this->info(json_encode($clientList));
        \Log::info("Cron is working fine!");
    }


    public function processLead($allLeads){

        foreach ($allLeads['opportunities'] as $lead) {
            if(isset($lead['id'])){
                $source = $lead['source'];
                $id = $lead['contact']['id'];
                $name = $lead['contact']['name'];
                $email = $lead['contact']['email'];
                $phone = $lead['contact']['phone'];
                $leadUserCount = User::where('go_highlevel_id',$id)->count();
                if($leadUserCount){
                    $leadUser = User::where('go_highlevel_id',$id)->first();
                }else{
                    $leadUser = New User;
                    $leadUser->password = Hash::make('abcd1234');
                }

                $leadUser->name = $name;
                $leadUser->email = $email;
                $leadUser->phone = $phone;
                $leadUser->go_highlevel_id = $id;
                $leadUser->source = $source;
                $leadUser->type = 5;/* lead type*/
                $leadUser->save();

                $this->info(json_encode($lead));
            }
            
        }
    }

    public function generateLeads($opurtunity,$client_api_key){
        $date = new DateTime(date('Y-m-d',strtotime("-6 days")));
        $timestamp1  = $date->getTimestamp();
        if(isset($opurtunity->pipelines[0]->stages)){
                $pipelineid = $opurtunity->pipelines[0]->id;
                foreach ($opurtunity->pipelines[0]->stages as $stage) {
                    //echo $stage->id;
                    
                    $response = Http::withHeaders([
                        'Authorization' => 'Bearer ' . $client_api_key . ''
                    ])->withOptions([ 
                        'verify' => false,
                    ])->get('https://rest.gohighlevel.com/v1/pipelines/' . $pipelineid . '/opportunities?stageId=' . $stage->id . '&startDate='.$timestamp1.'000');
                    //echo '<pre>';
                    $allLeads = $response->json();
                    try {
                        $this->processLead($allLeads);
                    } catch (\Exception $e) {

                        //return $e->getMessage();
                        $this->info('4 '.$e->getMessage());
                        \Log::info('function processLead:'.$e->getMessage());
                    }
                    
                    

                    }

            }
    }

    public function getOpportunities($client_api_key){

        $response = Http::withHeaders([
                         'Authorization' => 'Bearer ' . $client_api_key . ''
                    ])->withOptions([
                        'verify' => false,
                    ])->get('https://rest.gohighlevel.com/v1/pipelines/');

        return json_decode($response);


    }


    public function getClientList(){

        return DB::table('users')
        ->select('name', 'users.id', 'user_info.user_id', 'ghl_api_key')
        ->whereRaw("type= 2 and status= 1")
        ->leftJoin(
            'user_info',
            'users.id', '=', 'user_info.user_id'
        )->get();
    }
}
