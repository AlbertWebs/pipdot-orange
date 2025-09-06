<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SendMails;
use App\Http\Controllers\ContactFormSubmissionController;
use Spatie\Honeypot\ProtectAgainstSpam;
class MessageController extends Controller
{
    public function contact_form(Request $request){
       $name = $request->name;
       $email = $request->email;
       $message = $request->message;
       $subject = $request->subject;
       //Send email
    //   SendMails::contact_form($name,$email,$subject,$message);

    }
}
