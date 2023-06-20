<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewMessageEvent;
use Predis\Client;


class eventController extends Controller
{
    public function event_all()
    {
        echo "start";
        event(new NewMessageEvent('Hello, world!'));
        echo "end";
    }
}
