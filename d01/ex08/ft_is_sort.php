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
		$i++;
	}
	return (true);
}
?>
