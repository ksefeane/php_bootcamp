#!/usr/bin/php	
<?php
function ft_is_sort($arr)
{
	$i = 0;
	$c = count($arr);
	$org = [];
	$org = array_merge($org, $arr);
	sort($org);
	while ($i < $c)
	{
		if (strcmp($org[$i], $arr[$i]) !== 0)
			return (false);
		i++;
	}
	return (true);
}
$arr = explode(" ", $argv[1]);
if (ft_is_sort($arr))
	echo "the array is sorted\n";
else
	echo "the array is not sorted";
?>
