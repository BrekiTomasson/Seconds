# Upgrading

## v1.2.0 - 2025-11-26

As of `v1.2.0`, the old static method names have been deprecated and replaced with names that, while longer, make more sense.
Thanks to Reddit user [MateusAzevedo](https://www.reddit.com/r/laravel/comments/1p6f5oe/laravel_tagged_cache/nqva329/) for
the suggestion.

- `Seconds::minutes($minutes)` is now called `Seconds::fromMinutes($minutes)`
- `Seconds::hours($hours)` is now called `Seconds::fromHours($hours)`
- `Seconds::days($days)` is now called `Seconds::fromDays($days)`
- `Seconds::weeks($weeks)` is now called `Seconds::fromWeeks($weeks)`

As this is a considerable change to the implementation, the old names still work, but your IDE should show them as deprecated.
Please ensure that you change your implementation, as I will be removing the old method names in future releases.