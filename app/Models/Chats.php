<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['manager_id','customer_id','b24_id','b24_type'];

    public function customer()
    {
        return $this->belongsTo(Customers::class,'custom_id');
    }

    public function manager()
    {
        return $this->belongsTo(Managers::class,'manager_id');
    }

}
