<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    use HasFactory;

    public function messagesToChats()
    {
        return $this->hasMany(messages_to_chats::class);
    }
}
