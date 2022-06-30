<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /* public function index(){
        return view('user.contact.index');
    } */
    public function sendEmail(Request $req){
        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'message'=>$req->message
        ];
       Mail::to('tuanpro99cuter@gmail.com')->send(new ContactMail($data));
       return 'Bạn đã gửi thư thành công!';
    }
}
