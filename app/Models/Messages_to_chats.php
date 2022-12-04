<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages_to_chats extends Model
{
    use HasFactory;

    public function chacts()
    {
        return $this->hasMany(Chats::class);
    }
}
