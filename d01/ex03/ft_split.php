#!/usr/bin/php
<?PHP
function ft_split($s1)
{
	$tab = explode(" ", $s1);
	sort($tab);
	$tab = array_filter($tab);
	return ($tab);
}
?>
