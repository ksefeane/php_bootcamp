<?php
function ft_split($str)
{
	$chunks = preg_split("/\s+/", $str);
	sort($chunks);
	return $chunks;
}
?>
