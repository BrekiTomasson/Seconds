# Seconds

PHP Library to simplify stuff when all you want is a number of seconds.

Will be kept super simple as it's mainly just a single `Enum` class with a
bunch of constants and helper functions that all return an integer. Don't
expect too many new features in upcoming patches and updates, since it's
just a simple helper library that does one thing and one thing only.

# Usage

Usage is super simple, as one would expect. Just call the static method for
the appropriate input type and give it the number, and it will return the
number of seconds. No more `60 * 60 * 24 * 7` to get the number of seconds
in a week. Just call `Seconds::weeks(1)` and you're good to go.

For example:

```php
Seconds::minutes(1);
// 60

Seconds::minutes(32);
// 1920

Seconds::hours(3);
// 180

Seconds::days(3)
// 259200

Secnds::weeks(4)
// 2419200
```

# Limitations and Constraints

Since I want to keep things simple, the output is limited to positive numbers.
This means that even if the input is negative, the output will be positive:

```php
Seconds::minutes(-1);
// 60
```

Also, the input for all methods must be a whole number, so you cannot check
how many seconds are in 3.5 hours unless you do something like this:

```php
Seconds::hours(3) + Seconds::minutes(30);
// 12600
```

Finally, the longest available time period is weeks, since both months and
years have a variable length. If you want to figure out how many seconds are
in three months, you'll have to do something like one of these examples:

```php
use Breki\Seconds;Seconds::weeks(13);
// 7862400

Seconds::days(31 + 30 + 31);
// 7948800
```

# Upcoming Features and Future Development Ideas

Right now, I have very little planned for this library as it does what it's
supposed to do. The only thing that I can imagine is maybe adding support for
calculating the seconds between two dates, but that's not really the purpose
of this library. If you want to do that, you should probably use the `Carbon`
library and do something like this:

```php
$date1 = Carbon::parse('2023-09-23 07:14:00 UTC')
$date2 = Carbon::parse('2023-12-31 23:59:59 UTC')

$date1->diffInSeconds($date2)
> 8613959
```

Of course, if you have any thoughts or ideas, feel free to open an issue or
throw a Pull Request my way, and we'll see what comes of it!