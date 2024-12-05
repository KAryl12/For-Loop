<?php
$start = 1;
$end = 10;

// Iterate over the range
for ($num = $start; $num <= $end; $num++) {
    // Check if the number is odd or even
    if ($num % 2 == 0) {
        echo "<br>$num is even\n";
    } else {
        echo "<br>$num is odd\n";
    }
}
?>