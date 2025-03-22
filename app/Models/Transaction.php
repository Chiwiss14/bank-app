<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'type_id', 'status', 'details'];

    public function transactionType()
    {
        return $this->belongsTo(TransactionType::class, 'type_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id'); // 'user_id' is the foreign key in the transactions table
    }

}
