<?php

namespace App\Models;

use App\Utilities\FilterBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customers::class,'custom_id');
    }

    protected $casts = [
        'content' => 'array',
    ];
}
