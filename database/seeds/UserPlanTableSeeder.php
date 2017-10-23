<?php

use Illuminate\Database\Seeder;

class UserPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\UserPlan::class, 10)->create();
    }
}
