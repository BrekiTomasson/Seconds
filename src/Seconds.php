<?php

declare(strict_types=1);

namespace Breki;

enum Seconds: int
{
    case ONE_DAY = 86_400;

    case ONE_HOUR = 3_600;

    case ONE_MINUTE = 60;

    case ONE_WEEK = 604_800;

    /** @deprecated v1.2.0 and replaced with fromDays(int $days), will be removed in v2.0.0. */
    public static function days(int $days): int
    {
        return self::fromDays($days);
    }

    /** @deprecated v1.2.0 and replaced with fromHours(int $hours), will be removed in v2.0.0. */
    public static function hours(int $hours): int
    {
        return self::fromHours($hours);
    }

    /** @deprecated v1.2.0 and replaced with fromMinutes(int $minutes), will be removed in v2.0.0. */
    public static function minutes(int $minutes): int
    {
        return self::fromMinutes($minutes);
    }

    /** @deprecated v1.2.0 and replaced with fromWeeks(int $weeks), will be removed in v2.0.0. */
    public static function weeks(int $weeks): int
    {
        return self::fromWeeks($weeks);
    }

    public static function fromDays(int $days): int
    {
        return abs($days) * self::ONE_DAY->value;
    }

    public static function fromHours(int $hours): int
    {
        return abs($hours) * self::ONE_HOUR->value;
    }

    public static function fromMinutes(int $minutes): int
    {
        return abs($minutes) * self::ONE_MINUTE->value;
    }

    public static function fromWeeks(int $weeks): int
    {
        return abs($weeks) * self::ONE_WEEK->value;
    }
}
