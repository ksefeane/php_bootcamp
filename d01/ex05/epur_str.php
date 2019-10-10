#!/usr/bin/php
<?php
$w = trim($argv[1]);
$w = preg_replace("/\s+/", " ", $w);
echo $w."\n";
?>
