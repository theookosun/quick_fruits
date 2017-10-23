<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SubscriptionPlan::class, function (Faker\Generator $faker) {

    return [
        'name'        => $faker->name . " " . mt_rand(10, 100),
        'description' => $faker->paragraph,
        'picture'     => $faker->sentence,
        'price'       => mt_rand(5000, 10000)
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\UserPlan::class, function (Faker\Generator $faker) {

    $status = ['active', 'inactive'];
    $randomKey = array_rand($status);
    $status = $status[$randomKey];

    return [
        'user_id' => mt_rand(1, 10),
        'plan_id' => mt_rand(1, 10),
        'delivery_slot_id' => mt_rand(1, 3),
        'plan_duration_id' => mt_rand(1, 3),
        'status'  => $status,
    ];

});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\DeliverySlot::class, function (Faker\Generator $faker) {

    $labels = ['8am-10am','10am-12am','1pm-3pm'];
    $randomKey = array_rand($labels);
    $label = $labels[$randomKey];

    return [
        'label' => $label,
    ];

});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\PlanDuration::class, function (Faker\Generator $faker) {

    $labels = [30,60,90];
    $randomKey = array_rand($labels);
    $label = $labels[$randomKey];

    return [
        'duration' => $label,
    ];

});