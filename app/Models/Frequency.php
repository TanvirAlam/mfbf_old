<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    //

    /**
     * Belong to many income
     */
    public function incomeFrequency()
    {
        $this->hasMany(Income::class, 'id', 'frequency_id');
    }

    /**
     * Belong to many saving
     */
    public function savingFrequency()
    {
        $this->hasMany(Saving::class, 'id', 'frequency_id');
    }

    /**
     * Belong to many expenses
     */
    public function expenseFrequency()
    {
        $this->hasMany(Expense::class, 'id', 'frequency_id');
    }
}
