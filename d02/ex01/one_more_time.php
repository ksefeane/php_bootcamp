#!/usr/bin/php
<?php
function nummon($month)
{
	$i = 0;
	$m = array("January", "February", "March", "April", "May", "June", "July",
			"August", "September", "October", "November", "December");
	$c = count($m);
	while ($i < $c)
	{
		if (strcmp($month, $m[$i]) === 0)
			return (++$i);
		$i++;
	}
	return (0);
}
function maptime($time)
{
	$t = explode(":", $time);
	$h = (int)$t[0] * 3600;
	$m = (int)$t[1] * 60;
	$s = (int)$t[2];
	return $h + $m + $s;
}
function mapdate($date)
{
	$d = maptime("24:00:00");
	return $d * $date;
}
function mapmon($month)
{
	$m = mapdate(30);
	return $m * $month;
}
function mapyea($year)
{
	$cy = mapmon(12);
	return $cy * ($year - 1970);
}
function sorter($calender)
{
	$cal = explode(" ", $calender);
	$d = mapdate($cal[1]);
	$m = mapmon(nummon($cal[2]));
	$y = mapyea($cal[3]);
	$t = maptime($cal[4]);
	echo $d + $m + $y + $t;
}
sorter($argv[1]);
echo "\n";
?>
