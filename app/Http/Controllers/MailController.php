<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $obj = new \stdClass();
        $obj->demo_one = 'Demo One Value';
        $obj->demo_two = 'Demo Two Value';
        $obj->sender = 'toktan.saparkul02@gmail.com';
        $obj->receiver = 'toktan.saparkul02@gmail.com';

        Mail::to('toktan.saparkul02@gmail.com')->send(new DemoEmail($obj));
    }
}