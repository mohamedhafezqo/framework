<?php

require __DIR__.'/../../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Config\Database;

new Database();

Capsule::schema()->create('articles', function ($table)
{
    $table->increments('id');
    $table->string('title');
    $table->string('description');
    $table->timestamps();
    $table->softDeletes();
});