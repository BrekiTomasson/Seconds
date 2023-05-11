<?php

use Breki\Seconds;

it('knows how many seconds there are in 15 minutes', function () {
    expect(Seconds::minutes(15))
        ->toBeInt()
        ->toBe(900);
});

it('knows how many seconds there are in 45 minutes', function () {
    expect(Seconds::minutes(45))
        ->toBeInt()
        ->toBe(2_700);
});

it('knows how many seconds there are in 500 minutes', function () {
    expect(Seconds::minutes(500))
        ->toBeInt()
        ->toBe(30_000);
});

it('knows how many seconds there are in 999 minutes', function () {
    expect(Seconds::minutes(999))
        ->toBeInt()
        ->toBe(59_940);
});