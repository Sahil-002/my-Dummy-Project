<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageUserController extends Controller
{
    public function index(){
        return view('manage_user.index');
    }
    public function sendEmail()
    {
        $details = [
            'title' => 'Success',
            'content' => 'This is an email testing using Laravel-Brevo',
        ];
       
        \Mail::to('destination.sahilalisa.456@gmail.com')->send(new \App\Mail\TestMail($details));
       
        return 'Email sent at ' . now();
    }
}
