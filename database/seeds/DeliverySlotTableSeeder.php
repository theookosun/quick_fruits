<?php

use Illuminate\Database\Seeder;

class DeliverySlotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\DeliverySlot::class, 10)->create();
    }
}
