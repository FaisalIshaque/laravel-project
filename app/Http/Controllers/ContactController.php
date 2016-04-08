<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactRequest;

use Illuminate\Support\Facades\Mail;

use App\Jobs\SendReminderEmail;

use Illuminate\Bus\Queueable;

class ContactController extends Controller
{
    //
    public function showForm()
  {
    return view('pages.contact');
  }

  public function sendContactInfo(ContactRequest $request)
  {
  	$data = $request->only('name', 'email');
    $data['messageLines'] = explode("\n", $request->get('message'));

    $this->dispatch(new SendReminderEmail($data['name'], $data['email'], 'Sample message'));

    return redirect('cards')
        ->withSuccess("Thank you for your message. It has been sent.");
  }

  public function ReminderEmail()
  {
  		Mail::later(60 * 20,'emails.queued_mails', ["name" => "Frank Green"], function($message)
        {
            $message->to('frank@green.com', 'Frank Green')
            		->subject('Hello Frank!');
        });

        return 'Email Will Be Sent 10 Seconds Later';
  }

}
