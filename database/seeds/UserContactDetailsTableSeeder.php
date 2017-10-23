<?php

use Illuminate\Database\Seeder;

class UserContactDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\UserContactDetail::class, 10)->create();
    }
}
