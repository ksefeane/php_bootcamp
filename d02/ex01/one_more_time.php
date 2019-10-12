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
	$sum = $h + $m + $s;
	return ($sum);
}
function mapdate($date)
{
	$day = maptime("24:00:00");
	$d = $date * $day;
	return $d;
}
function mapmon()
{
	$mon = mapdate(30);
	echo $mon;
}
//mapmon($argv[1]);
mapmon();
echo "\n";
?>
