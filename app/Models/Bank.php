<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * TODO: Add those coloumn in the bank table
     */
    protected $fillable = ['name', 'account_no', 'reg_no'];
}
