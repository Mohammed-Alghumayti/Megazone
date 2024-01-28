<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_name',
        'price',
        
    ];

    // Example: Receipt belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
