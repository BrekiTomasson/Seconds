<?php

use Breki\Seconds;

it('knows how many seconds there are in 3 days', function () {
    expect(Seconds::days(3))
        ->toBeInt()
        ->toBe(259_200);
});

it('knows how many seconds there are in 19 days', function () {
    expect(Seconds::days(19))
        ->toBeInt()
        ->toBe(1_641_600);
});

it('knows how many seconds there are in 42 days', function () {
    expect(Seconds::days(42))
        ->toBeInt()
        ->toBe(3_628_800);
});

it('knows how many seconds there are in 300 days', function () {
    expect(Seconds::days(300))
        ->toBeInt()
        ->toBe(25_920_000);
});
