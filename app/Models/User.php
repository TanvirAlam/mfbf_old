<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, CanResetPassword, MailTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'email_verification'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email_verification'
    ];

    /* Relationships */
    /**
     * User can have one profile each
     * TODO: Create Model for it!!
     */
    public function profile()
    {
        $this->hasOne(Profile::class, 'user_id', 'id');
    }

    /**
     * User can have more than one transactions
     */
    public function transaction()
    {
        $this->hasMany(Transaction::class, 'user_id', 'id');
    }

    /**
     * User can have more than one income source, Basic salary, Freelance work, Skat, Investments, etc
     * TODO: I see a Income categories
     */
    public function income()
    {
        $this->hasMany(Income::class, 'user_id', 'id');
    }

    /**
     * User can have more than one expenses
     * TODO: What is the difference between expense and transaction?
     */
    public function expense()
    {
        $this->hasMany(Expense::class, 'user_id', 'id');
    }

    /**
     * User ca have more than one savings each children, retirements, travel savings, etc
     */
    public function saving()
    {
        $this->hasMany(Saving::class, 'user_id', 'id');
    }

    /**
     * User ca have more than one Banks Noredea, DanskaBank, etc
     */
    public function bank()
    {
        $this->hasMany(Bank::class, 'user_id', 'id');
    }

    /**
     * User can have more than one budget Food, Travel, Saving, etc
     */
    public function budget()
    {
        $this->hasMany(Budget::class, 'user_id', 'id');
    }

    /**
     * User can have more than one budget groups: Household, transportation, Kids, etc
     */
    public function budgetGroup()
    {
        $this->hasMany(BudgetGroup::class, 'user_id', 'id');
    }
}
