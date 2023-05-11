<?php

declare(strict_types=1);

namespace Breki;

enum Seconds: int
{
    case ONE_DAY = 86_400;

    case ONE_HOUR = 3_600;

    case ONE_MINUTE = 60;

    case ONE_WEEK = 604_800;

    public static function days(int $days): int
    {
        if ($days < 0) {
            throw new NotPositiveInteger($days);
        }

        return $days * self::ONE_DAY->value;
    }

    public static function hours(int $hours): int
    {
        if ($hours < 0) {
            throw new NotPositiveInteger($hours);
        }

        return $hours * self::ONE_HOUR->value;
    }

    public static function minutes(int $minutes): int
    {
        if ($minutes < 0) {
            throw new NotPositiveInteger($minutes);
        }

        return $minutes * self::ONE_MINUTE->value;
    }

    public static function weeks(int $weeks): int
    {
        if ($weeks < 0) {
            throw new NotPositiveInteger($weeks);
        }

        return $weeks * self::ONE_WEEK->value;
    }
}