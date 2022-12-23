<?php

namespace App\Models;

use App\Utilities\FilterBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['custom_id','is_from_me','type','content','send_time','messenger','status'];

    public function customer()
    {
        return $this->belongsTo(Customers::class,'custom_id');
    }

    public function messagesToChats()
    {
        return $this->hasMany(Messages_to_chats::class);
    }
    protected $casts = [
        'content' => 'array',
    ];
}
