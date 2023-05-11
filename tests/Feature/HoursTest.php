<?php

use Breki\Seconds;

it('knows how many seconds there are in 20 hours', function () {
    expect(Seconds::hours(20))
        ->toBeInt()
        ->toBe(72_000);
});

it('knows how many seconds there are in 42 hours', function () {
    expect(Seconds::hours(42))
        ->toBeInt()
        ->toBe(151_200);
});

it('knows how many seconds there are in 69 hours', function () {
    expect(Seconds::hours(69)) // nice.
        ->toBeInt()
        ->toBe(248_400);
});

it('knows how many seconds there are in 999 hours', function () {
    expect(Seconds::hours(999))
        ->toBeInt()
        ->toBe(3_596_400);
});