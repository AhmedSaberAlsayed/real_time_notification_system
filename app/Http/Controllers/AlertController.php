<?php

namespace App\Http\Controllers;

use App\Events\AlertEvent;
use App\Events\MyEvent;
use Illuminate\Broadcasting\Broadcasters\Broadcaster;
use Illuminate\Contracts\Broadcasting\Broadcaster as BroadcastingBroadcaster;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function alert()
    {
        event(new MyEvent('hello world'));
    }
}
