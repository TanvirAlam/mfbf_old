<?php

use Illuminate\Database\Seeder;
use App\Models\Groups;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->truncate();

        Groups::create(['name' => 'Home Expense']);
        Groups::create(['name' => 'Transportation']);
        Groups::create(['name' => 'Food']);
        Groups::create(['name' => 'Utilities']);
        Groups::create(['name' => 'Medical']);
        Groups::create(['name' => 'Insurance']);
        Groups::create(['name' => 'Personal']);
        Groups::create(['name' => 'Education']);
        Groups::create(['name' => 'Savings']);
        Groups::create(['name' => 'Gifts/Donations']);
        Groups::create(['name' => 'Entertainment']);
        Groups::create(['name' => 'Income']);
        Groups::create(['name' => 'Daily living']);
        Groups::create(['name' => 'Obligations']);
        Groups::create(['name' => 'Subscriptions']);
        Groups::create(['name' => 'Miscellaneous']);
    }
}
