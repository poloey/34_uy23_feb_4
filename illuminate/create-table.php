<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->dropIfExists('teachers');

Capsule::schema()->create('teachers', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email');
    $table->timestamps();
});