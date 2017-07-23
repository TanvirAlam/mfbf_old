<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenesCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'text'];
}
