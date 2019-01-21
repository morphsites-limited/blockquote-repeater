<?php

use Faker\Generator as Faker;
use Dewsign\BlockquoteRepeater\Blockquote;

$factory->define(Blockquote::class, function (Faker $faker) {
    return [
        'quote' => $faker->bs,
        'citation' => $faker->name(),
    ];
});