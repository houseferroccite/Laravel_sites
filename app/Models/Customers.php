<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['custom_id', 'phone', 'name'];

    public function message()
    {
        return $this->hasMany(Messages::class);
    }

    public function chats()
    {
        return $this->hasMany(Chats::class);
    }

    public function manager()
    {
        return $this->hasMany(Managers::class);
    }

}
