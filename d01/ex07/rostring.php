#!/usr/bin/php	
<?php
if ($argc > 1)
{
	$i = 0;
	$bits = preg_split("/\s+/", $argv[1]);
	echo $bits[count($bits) - 1];
	while ($i < count($bits) - 1)
	{
		echo " ";
		echo $bits[$i];
		$i++;
	}
	echo "\n";
}
?>
