<?php
$a = 5;

if ($a === 5) {
    echo "\$aは5です";
    echo "<br />";
}




$a =7;

if ($a === 5) {
    echo "\$aは5です";
} else {
    echo "\$aは5以外です";
    echo "<br />";
}



if ($a === 5) {
    echo "\$aは5です";
} elseif ($a === 6) {
    echo "\$aは6です";
} else {
    echo "\$aは7です";
    echo "<br />";
}



$people = "Saburo";

switch ($people) {
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    default:
        echo "三郎です";
        echo "<br />";
        break;
}

$a = ($a === 7) ? "TRUE" : "FALSE";
echo $a;