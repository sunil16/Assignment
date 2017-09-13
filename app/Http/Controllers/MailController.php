<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Request;

class MailController extends Controller
{
  public function index()
{

  $emails = ['sunil16nit@gmail.com','rootfind193@gmail.com','sivakumar@teachedison.com','deepak@teachedison.com'];
  Mail::send('emails.mail', ['title' => "hello", 'content' => "hey"], function($message)  use ($emails)
     {
       $message->from("rootfind193@gmai.lcom", 'mailer test');
       $message->to($emails);
     });

  return view('emails.index');
}
public function admin()
{

  return view('emails.index');
}


}
