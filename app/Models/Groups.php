<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function getNameAttributes()
    {
        return $this->name;
    }

    /* Relationship */

    /**
     * A Group can have multiple categories
     */
    public function categories()
    {
        return $this->hasMany(Category::class, 'group_id', 'id');
    }
}
