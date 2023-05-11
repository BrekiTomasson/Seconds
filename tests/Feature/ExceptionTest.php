<?php

use Breki\Seconds;
use Breki\NotPositiveInteger;

it('throws an exception when you input negative minutes', function () {
    $minutes = Seconds::minutes(-1);
})->throws(NotPositiveInteger::class);

it('throws an exception when you input negative hours', function () {
    $hours = Seconds::hours(-1);
})->throws(NotPositiveInteger::class);

it('throws an exception when you input negative days', function () {
    $days = Seconds::days(-1);
})->throws(NotPositiveInteger::class);

it('throws an exception when you input negative weeks', function () {
    $weeks = Seconds::weeks(-1);
})->throws(NotPositiveInteger::class);