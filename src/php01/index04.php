<?php
$a = 15;
$b = 3;
$c = 10;

echo $a + $b;
echo "<br />";
echo $a - $b;
echo "<br />";
echo $a * $b;
echo "<br />";
echo $a / $b;
echo "<br />";
echo $a % $c;
?>

<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

echo "<br />";
echo $a /= $d;
echo "<br />";
echo $c += $d;
echo "<br />";

?>

<?php
$a = 20;
$b = 5;

echo ($a > $b);
echo "<br />";

?>

<?php
$a = 20;
$b = 5;

echo ($a > 10 && $a < 30);
echo "<br />";

?>

<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
?>