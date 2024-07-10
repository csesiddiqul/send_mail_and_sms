<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationMail;

class MailController extends Controller
{
    public function sendMail(){
        $url = 'https.google.com';
        $user = User::all();
        $data = [
            'applicant_name' => 'Applicant Name',
            'program_name' => 'Program Name',
            'program_type' => 'Program Type',
            'program_subject' => 'Program Subject',
            'email_address' => 'email@example.com',
            'mobile_number' => '1234567890',
            'application_date' => '2024-06-22 11:24:00',
            'application_number' => 'CRF-20243057-00296'
        ];
        Mail::to('labibkg@gmail.com')->queue(new ApplicationMail($url, $user, $data));

        return 'success';

    }
}
