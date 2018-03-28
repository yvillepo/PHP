#!/usr/bin/php
<?PHP
while (TRUE)
{
	echo "Entrez un nombre: ";
	$nb = fgets(STDIN);
	if ($nb == FALSE)
	{
		echo "\n";
		break;
	}
	$nb = substr($nb, 0, -1);
	if (is_numeric($nb))
	{
		if (($nb % 2) == 0)
			echo "Le chiffre $nb est Pair\n";
		else
			echo "Le chiffre $nb est Impair\n";
	}
	else
		echo "'$nb' n'est pas un chiffre\n";
}
?>
