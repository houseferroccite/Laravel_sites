<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Messages::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return MessageResource
     */
    public function store(Request $request)
    {
        $created_message = Messages::create([
            'custom_id' => $request->custom_id,
            'is_from_me' => $request->is_from_me,
            'type' => $request->type,
            'content' => json_decode($request->content_f),
            'send_time' => date('Y-m-d H:i:s', strtotime($request->send_time)),
            'messenger' => $request->messenger,
            'status' => $request->status
        ])->messagesToChats()->create([
            'chat_id' => 1 //временное значение пока не решу проблему с добавлением в тб CHATS
        ]);
        return $created_message;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\LaravelIdea\Helper\App\Models\_IH_Messages_C|Messages[]
     */
    public function show(Request $request)
    {
        $phone = $request->phone;
        $messages = Messages::whereHas('customer', function ($q) use ($phone) {
            $q->where('phone', '=', $phone);
        })->get();
        return $messages;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
