<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['phone', 'name', 'custom_id'];

    public function chats()
    {
        return $this->hasMany(Chats::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'custom_id');
    }
}
