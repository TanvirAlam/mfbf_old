<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankTransaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * TODO:change the table coloumn name
     */
    protected $fillable = ['bank_id', 'paid_to', 'amount', 'balance'];
}
