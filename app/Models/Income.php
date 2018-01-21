<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Income extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_id', 'description', 'amount_before_skat', 'amount_after_skat', 'occurrences', 'interval'];

    protected $dates = [
        'collect_at',
        'cancelled_at',
        'deleted_at',
    ];
}
