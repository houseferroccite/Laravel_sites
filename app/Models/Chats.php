<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    use HasFactory;

    public function message()
    {
        return $this->hasMany(Messages_to_chats::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customers::class,'custom_id');
    }
}
