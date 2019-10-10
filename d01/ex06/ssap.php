#!/usr/bin/php	
<?php
function chops($str)
{
	$w = trim($str);
	$chunks = preg_split("/\s+/", $w);
	return $chunks;
}
function printer($arr)
{
	$i = 0;
	$c = count($arr);
	while ($i < $c)
	{
		echo $arr[$i]."\n";
		$i++;
	}
}
if ($argc > 1)
{
	$i = 2;
	$bits = chops($argv[1]);
	while ($i < $argc)
	{
		$x = chops($argv[$i]);
		$bits = array_merge($bits, $x);
		$i++;
	}
	sort($bits);
	printer($bits);
}
?>
