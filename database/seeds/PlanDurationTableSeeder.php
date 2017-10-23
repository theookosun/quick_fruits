<?php

use Illuminate\Database\Seeder;

class PlanDurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\PlanDuration::class, 10)->create();
    }
}
