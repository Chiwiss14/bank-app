<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'card_number',
        'card_holder_name',
        'expiry_date',
        'cvv',
        'card_type',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
