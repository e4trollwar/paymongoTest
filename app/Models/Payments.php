<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'user_id',
        'subtotal',
        'tax',
        'total',
        'updated_at',
        'created_at',
    ];
    use HasFactory;
}
