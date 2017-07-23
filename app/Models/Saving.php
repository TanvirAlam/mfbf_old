<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
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
     * Savings belongs to each user
     */
    public function user()
    {
        $this->belongsTo(User::class, 'id', 'user_id');
    }

    /**
     * Saving belongs to many saving categories
     */
    public function savingCategories()
    {
        $this->belongsTo(SavingCategory::class, 'id', 'category_id');
    }

    /**
     * Belong to many frequency
     */
    public function frequency()
    {
        $this->hasMany(Frequency::class, 'id', 'frequency_id');
    }
}
