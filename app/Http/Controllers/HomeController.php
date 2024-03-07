<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
         $details = [
        'title' => 'Welcome',
        'content' => 'Welcome To Admin LTE Theme',
    ];

    Mail::to(auth()->user()->email)->send(new TestMail($details));
        return view('home');
    }
    
}
