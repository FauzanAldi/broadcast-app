<?php

namespace App\Console;

use Illuminate\Console\Command;
use App\Models\BPPTIK_Queue;
use App\Models\BPPTIK_User;
use App\Notifications\BroadcastBPPTIKNotif;

class BroadcastBPPTIK extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:broadcast_bpptik';

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
     * @return mixed
     */
    public function handle()
    {   
        // $data=PdSeminarRegistration::join('pd_seminar_workshop','pd_seminar_registration.seminar_workshop_id','pd_seminar_workshop.id')->join('pd_seminar','pd_seminar_workshop.seminar_id','pd_seminar.id')->join('data','pd_seminar_registration.data_id','data.id')->where('seminar_workshop_id','309')->select(['data.*'])->get();
        // foreach ($data as $key ) {
        //     $BPPTIK_User=BPPTIK_User::where('id',$key->id)->first();
        //     $BPPTIK_User->notify(new BroadcastReminderWorkshop($BPPTIK_User));
        // }
        // $data=BPPTIK_User::orderBy('id','desc')->where('id',126744)->get();
        $current_queue=BPPTIK_Queue::orderBy('id','desc')->firstOrFail();
        $data=BPPTIK_User::where('id','>',$current_queue->users_id)->limit(50)->orderBy('id','asc')->get();
        // dd($data);
        $no=1;
        foreach ($data as $key ) {
            $BPPTIK_User=BPPTIK_User::where('id',$key->id)->first();
            if (filter_var($key->email, FILTER_VALIDATE_EMAIL)) {
                $BPPTIK_User->notify(new BroadcastBPPTIKNotif($BPPTIK_User));
                // echo $key->email .' done at'.date('Y-m-d H:i:s').'\n';
                $this->output->write($no.' '.$key->id .' <--> '. $key->email .' done at '.date('Y-m-d H:i:s'),true);
                
            }else{
                $this->output->write($no.' '.$key->id .' <--> '. $key->email .' skippp not validd ',true);
            }

            if($key->id!=126744){
                $queue=new BPPTIK_Queue();
                $queue->users_id=$key->id;
                $queue->save();
            }
            $no++;
        }
        //
    }
}
