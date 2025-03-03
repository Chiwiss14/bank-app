<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'type_id', 'status', 'details'];

    public function transactionType()
    {
        return $this->belongsTo(TransactionType::class, 'type_id');
    }
}
