<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'amount', 'time', 'type'];
    // value dari array harus sama dengan column yang ditulis di create_transaction_table
}
