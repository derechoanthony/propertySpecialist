<?php

use PropertySpecialist\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->truncate();
        (new UserType(['description' => 'admin']))->save();
        (new UserType(['description' => 'agent']))->save();   
    }
}
