<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavingCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'text'];

    /* Relationship */
    /**
     * Categories belongs to each saving
     */
    public function user()
    {
        $this->belongsTo(Saving::class, 'id', 'category_id');
    }
}
