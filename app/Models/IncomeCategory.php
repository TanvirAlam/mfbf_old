<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomeCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'text'];

    /**
     * Belong to income categories
     */
    public function income()
    {
        $this->belongsTo(Income::class, 'category_id', 'id');
    }
}
