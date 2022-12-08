<?php

namespace App\Http\Controllers;
use App\Models\Messages;
use App\Models\Messages_to_chats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function get()
    {
        $messages = Messages::all();
        return view("messages",compact('messages'));
    }
}
