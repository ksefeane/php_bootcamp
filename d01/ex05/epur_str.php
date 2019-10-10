#!/usr/bin/php
<?php
if ($argc == 2)
{
	$w = trim($argv[1]);
	$w = preg_replace("/\s+/", " ", $w);
	echo $w."\n";
}
?>
