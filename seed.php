<?php 

require 'vendor/autoload.php';
use Carbon\Carbon;
use Faker\Factory;

$faker = Factory::create();

foreach(range(0, 100) as $i) {
  Teacher::insert([
    'name' => $faker->name,
    'email' => $faker->email,
    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
  ]);
}


