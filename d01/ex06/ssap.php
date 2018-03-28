#!/usr/bin/php
<?PHP
function ft_split($s1)
{
	$tab = explode(" ", $s1);
	sort($tab);
	$tab = array_filter($tab);
	return ($tab);
}

foreach($argv as $i => $arg)
{
	if ($i != 0)
		$line = $line." ".$arg;
}
$res = ft_split($line);
foreach($res as $print)
{
	echo "$print\n";
}
?>
