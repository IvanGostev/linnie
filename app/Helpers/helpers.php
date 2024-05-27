<?php

use App\Models\Notification;

function notifications()
{
    return Notification::where('user_id', auth()->user()->id)->where('status', 1)->get();
}
function oldNotifications()
{
    return Notification::where('user_id', auth()->user()->id)->where('status', 0)->get();
}

function notificationsCount()
{
    return Notification::where('user_id', auth()->user()->id)->where('status', 1)->count();
}
