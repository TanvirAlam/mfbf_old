<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DebtCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'text'];
}
