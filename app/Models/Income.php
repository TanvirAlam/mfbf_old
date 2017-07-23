<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['amount'];

    /* Relationship */
    /**
     * Profiles belongs to each user
     */
    public function incomeCategory()
    {
        $this->belongsTo(IncomeCategory::class, 'id', 'category_id');
    }

    /**
     * Belong to many frequency
     */
    public function frequency()
    {
        $this->hasMany(Frequency::class, 'id', 'frequency_id');
    }
}
