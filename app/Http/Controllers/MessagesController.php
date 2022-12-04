<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Filters\MessageFilter;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function get()
    {
        $messages = Messages::all();
        return view("messages",compact('messages'));
    }

    public function searchPhone(Request $request)
    {
        $messages = Messages::whereHas('customer', function($q) use ($request){
            $q->where('phone', '=', $request->phone);
        })->get();
        return view('messages', compact('messages'));
    }
}
