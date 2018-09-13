<?php

use Faker\Generator as Faker;
use App\MineralClass;
use App\Mineral;

$factory->define(Mineral::class, function (Faker $faker) {
    return [
        'ru_name' => $faker->name,
        'en_name' => $faker->name,
        'formula' => $faker->name,
        'min_class_id' => $faker->randomElement(MineralClass::query()->pluck('id')->toArray()),
    ];
});
