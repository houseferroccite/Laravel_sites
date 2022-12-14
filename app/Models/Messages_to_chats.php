<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages_to_chats extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['message_id','chat_id'];

    public function chats()
    {
        return $this->belongsTo(Chats::class, 'chat_id');
    }

    public function messagesChats()
    {
        return $this->belongsTo(Messages::class);
    }
}
