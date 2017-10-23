<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(SubscriptionPlanSeeder::class);
        $this->call(PlanDurationTableSeeder::class);
        $this->call(DeliverySlotTableSeeder::class);
        $this->call(UserPlanTableSeeder::class);
        //$this->call(UserContactDetailsTableSeeder::class);
    }
}
