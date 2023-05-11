<?php

use Breki\Seconds;

it('knows how many seconds there are in 1 week', function () {
    expect(Seconds::weeks(1))
        ->toBeInt()
        ->toBe(604_800);
});

it('knows how many seconds there are in 4 weeks', function () {
    expect(Seconds::weeks(4))
        ->toBeInt()
        ->toBe(2_419_200);
});

it('knows how many seconds there are in 11 weeks', function () {
    expect(Seconds::weeks(11))
        ->toBeInt()
        ->toBe(6_652_800);
});

it('knows how many seconds there are in 19 weeks', function () {
    expect(Seconds::weeks(19))
        ->toBeInt()
        ->toBe(11_491_200);
});