<?php

for ($i = 0; $i < 4; $i++) {
  echo $i;
  echo "<br />";
}

for ($a = 2; $a <= 10; $a += 2) {
    echo $a;
    echo "<br />";
}


$count = 0;

while ($count < 20) {
    $count++;
    echo $count . "<br />";
}

$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . "<br />";
    $count++;
}


$num = 0;

do {
    echo "num = " . $num . "<br />";
    $num++;
} while ($num < 3);




for ($s = 1; $s <= 50; $s++) {
    if ($s % 15 == 0) {
        echo "FizzBuzz" . "<br />";
    } else if ($s % 3  == 0) {
        echo "Fizz" . "<br />";
    } else if ($s % 5  == 0) {
        echo "Buzz" . "<br />";
    } else {
        echo $s . "<br />";
    }

}


for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "●";
    }
    echo "<br />";
}