<?php

require 'vendor/autoload.php';

use Carbon\Carbon;
use Carbon\CarbonInterface;

$yesterday= carbon::yesterday();
echo $yesterday ."<br>";

echo carbon::today() . "<br>";

$tomorrow=carbon::tomorrow();
echo $tomorrow . "<br>";

$date1 = Carbon::create(2021,10, 25, 12, 48, 00);
echo $date1 . "<br>";

$date2 = Carbon::create(2021, 8, 25, 22, 48, 00, 'Europe/Moscow');
echo $date2 . "<br>";

$date3 = Carbon::createFromDate(2018, 8, 14, 'America/Chicago');
echo $date3 . "<br>";

$date4 = Carbon::createFromDate(2021,10, 25, 'Africa/Lagos');
echo $date4 . "<br>";

$date5 = Carbon::createFromTimestamp(1633703084);
echo $date5. "<br>";

echo carbon::now(). "<br>";

$name = 'Affliate_Program';
$value = 'Referrer ID';
$path = '/';
$current = Carbon::now();

$time = $current->addDays(90);
$expires = strtotime($time);
setcookie($name, $value, $expires, $path);

$now= carbon::now();

$next_monday = $now->next(\Carbon\CarbonInterface::MONDAY);
echo "Next monday: $next_monday<br>";

$prev_monday = $now->previous(CarbonInterface::MONDAY);//we can use carbon::MONDAY
echo "Previous monday: $prev_monday<br>";


$dt = Carbon::create(2021,10, 25, 12, 48, 00);
echo $dt->toDateString(). "<br>";//2021-10-25
echo $dt->toFormattedDateString(). "<br>";//Oct 25, 2021
echo $dt->toTimeString(). "<br>";//12:48:00
echo $dt->toDateTimeString(). "<br>";//2021-10-25 12:48:00
echo $dt->toDayDateTimeString(). "<br>";//Mon, Oct 25, 2021 12:48 PM
echo $dt->format('Y-m-d h:i:s A'). "<br>";//2021-10-25 12:48:00 PM

echo date_default_timezone_get(). "<br>";
date_default_timezone_set('Asia/Beirut');
echo date_default_timezone_get(). "<br>";

$time = "2021-08-04 16:19:49";
$dt = Carbon::createFromFormat('Y-m-d H:i:s', $time);

echo $dt->diffForHumans() . "<br>";

$time = "2021-08-04 16:19:49";
$dt = Carbon::createFromFormat('Y-m-d H:i:s', $time);

// Get the exact difference
$diff = $dt->diff(Carbon::now());

// Output the difference
echo "Years: " . $diff->y . "<br>";
echo "Months: " . $diff->m . ", ";
echo "Days: " . $diff->d .  ", ";
echo "Hours: " . $diff->h . ", ";
echo "Minutes: " . $diff->i . ", ";
echo "Seconds: " . $diff->s . "<br>";


$time = "2021-08-04 16:19:49";
Carbon::setLocale('ar');
$dt = Carbon::createFromFormat('Y-m-d H:i:s', $time);

echo $dt->diffForHumans() . "<br>";




require_once 'vendor/autoload.php';


$faker = Faker\Factory::create();

echo $faker->name(). "<br>";
echo $faker->email(). "<br>";
echo $faker->text(). "<br>";

for ($i = 0; $i < 3; $i++) {
    echo $faker->name() . "<br>";
}

$values = [];
for ($i = 0; $i < 10; $i++) {
    $values []= $faker->unique()->randomDigit();
}
print_r($values);

echo "<br>";

$values = [];
try {
    for ($i = 0; $i < 10; $i++) {
        $values []= $faker->unique()->randomDigitNotNull();
    }
} catch (\OverflowException $e) {
    echo "There are only 9 unique digits not null, Faker can't generate 10 of them!";
}






















