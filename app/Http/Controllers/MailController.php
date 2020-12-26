<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public  function create(){
        return view('mail.mail');
    }
    public function send(Request $request){
//    dd($request->mail);
//    return redirect()->route('email.create');
//    Mail::raw('hello', function ($message){
//        $message->to(request('mail'))
//            ->subject('Hi');
//    });
        $data = [
            'text' => 'This is a Welcome Message',
            'name' => 'Test',
            'link' => 'https://'
        ];
    Mail::to(request('mail'))->send(WelcomeMail($data));
        return redirect()->route('mail.create');
    }


    //
}
