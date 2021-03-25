<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\PDF;
use App\Mail\DeclineMail;
use App\Mail\AttMail;
class MailController extends Controller
{
   public function sendAccept(){
       $details = [
           'title' => 'Mail from ENSATE',
           'body' => 'Voilà votre attestation. Bonne journée'
       ];

       Mail::to("houda.mzari1999@gmail.com")->send(new TestMail($details));
       return "Email Sent";
    }
    public function sendAttestation(){
        $details = [
            'title' => 'Mail from ENSATE',
            'body' => 'Voilà votre relevé de notes. Bonne journée'
        ];

        Mail::to("houda.mzari1999@gmail.com")->send(new AttMail($details));
        return "Email Sent";
     }
    public function sendDecline(){
        $details = [
            'title' => 'Mail from ENSATE',
            'body' => "On s'excuse, Votre demande était refusé, veuillez contacter la direction via ce mail abdelhamid.benkaddour@gmail.com"
        ];

        Mail::to("houda.mzari1999@gmail.com")->send(new DeclineMail($details));
        return "Email Sent";
     }

}








