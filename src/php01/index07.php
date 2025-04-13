<?php

function num($number)
{
    $value = $number * 1;
    return $value;
}

$total = num(5);
echo $total . "<br />";




function score($score1, $score2, $score3) {
    $total = $score1 + $score2 + $score3;
    if ($total >= 210) {
        echo "合計点は" . $total . "なので合格です";
    } else {
        echo "合計点は" . $total . "なので不合格です";
    }
}

echo score(100, 100, 10);



//ミス
// function area($num1, $num2, $num3) {
//     $triangle = $num1 * $num2 / 2;
//     $square = $num1 * $num2;
//     $trapezoid = ($num1 + $num2) * $num3 / 2;
// }

// area(2, 5, 8);

// echo $triangle;
// echo $square;
// echo $trapezoid;

function getSquareArea($base, $height) {
    return $base * $height;
}

function getTriangleArea($base, $height) {
    return $base * $height / 2;
}

function getTrapezoidArea($upperBase, $lowerBase, $height) {
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(2, 5) . "\n";
echo getTriangleArea(4, 6) . "\n";
echo getTrapezoidArea(2, 3, 6);

