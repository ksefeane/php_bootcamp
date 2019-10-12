#!/usr/bin/php
<?php
function mapmon($month)
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
	echo $sum;
}
function mapdate($date)
{

}
//mapmon($argv[1]);
maptime($argv[1]);
echo "\n";
?>
