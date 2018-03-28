#!/usr/bin/php
<?php
if ($argc > 1)
{
	$tmp = explode(" ", $argv[1]);
	$tmp = array_values(array_filter($tmp));
	foreach ($tmp as $key => $mot)
	{
		if ($key != 0)
			echo $mot." ";
	}
	echo $tmp[0]."\n";
}
?>
