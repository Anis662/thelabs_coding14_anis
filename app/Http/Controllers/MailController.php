<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $details = [

            "name"=> $request->name ,
            
            "email"=> $request->email,
            
            "subject"=> $request->subject,
            
            "message"=> $request->message
            
            ];
            
            Mail::to("Anisberchem1189@gmail.com")->send(new TestMail($details));
             
            return  "<h1>Message envoye</h1>";
    }
}
