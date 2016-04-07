<?php

namespace App\Jobs;

use App\User;
use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Bus\Queueable;

use Illuminate\Support\Facades\Mail;

class SendReminderEmail extends Job implements ShouldQueue
{

    protected $data;

    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        $this->data['name'] = $name;
        $this->data['email'] = $email;
        $this->data['message'] = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->data;

         Mail::later(60 * 20,'emails.contact', ['name' => $this->data['name'], 'email' => $this->data['email']], function ($message) use ($data) {
                $message->to('faisal.ishaque21@gmail.com', 'Frank Green')
                ->from('pakora@gmail.com', 'Alu ka Samosa')
                ->subject('Blog Contact Form: '. $data['name'])
                ->replyTo($data['email']);
            });

    }
}
