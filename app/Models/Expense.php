<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use SoftDeletes;

    /**
     * Belong to many frequency
     */
    public function frequency()
    {
        $this->hasMany(Frequency::class, 'id', 'frequency_id');
    }
}
