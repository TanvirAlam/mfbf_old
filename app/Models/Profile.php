<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'street',
        'postal_code',
        'city',
        'country'
    ];

    /* Relationship */
    /**
     * Profiles belongs to each user
     */
    public function user()
    {
        $this->belongsTo(User::class, 'id', 'user_id');
    }
}
