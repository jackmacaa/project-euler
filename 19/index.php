<?php
// How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?
$d = new DateTime('1 Jan 1901 ');
$d2 = new DateTime('31 Dec 2000');

$sundays = 0;

$interval = new DateInterval('P1M');

while($d <= $d2)
{
    if($d->format('D') == 'Sun')
    {
        $sundays++;
    }

    $d->add($interval);
}

echo $sundays;