<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesToChatsController extends Controller
{
    public function messagesList()
    {
        return view('index');
    }

    public function searchPhone(Request $request)
    {
        $phone = $request->phone;
        $messages = Messages::whereHas('customer', function ($q) use ($phone) {
            $q->where('phone', '=', $phone);
        })->orderBy('send_time')->get();
        return view('index', compact('messages'));
    }
}
