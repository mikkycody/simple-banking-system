<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email(){
      $data = array('name'=>"Ying Banking");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('abc@gmail.com', 'Ying Banking')->subject
            ('Laravel Basic Testing Mail');
         $message->from('xyz@gmail.com','Ying Banking');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email(){
      $data = array('name'=>"Ying Banking");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Ying Banking')->subject
            ('Test mail');
         $message->from('xyz@gmail.com','Ying Banking');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email(){
      $data = array('name'=>"Ying Banking");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Ying Banking')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Ying Banking');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}