#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$argv[1] = trim ($argv[1]);
	$tmp = explode(" ", $argv[1]);
	$tmp = array_filter($tmp);
	foreach($tmp as $key => $mot)
	{
		if ($key == 0)
			$res = $mot;
		else
			$res = $res." ".$mot;
	}
	echo "$res\n";
}
?>
