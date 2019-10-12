#!/usr/bin/php	
<?php
if ($argc > 1)
{
	$w = preg_replace("/\s+/", " ", $argv[1]);
	echo $w."\n";
}
?>
