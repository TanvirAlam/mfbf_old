<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * TODO:change the table coloumn name
     */
    protected $fillable = ['label', 'amount'];
}
