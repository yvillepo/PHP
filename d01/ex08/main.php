#!/usr/bin/php
<?PHP
include("ft_is_sort.php");
$tab[] = "Et qu’est-ce qu’on fait maintenant ?";
$tab = array("a", "b", "c", "d", "e");
if (ft_is_sort($tab))
echo "Le tableau est trie\n";
else
echo "Le tableau n’est pas trie\n";
?>
