<?php
// function to find factorial of given number
function factorial($n)
{
    $res = 1;
    for ($i = 2; $i <= $n; $i++) {
        $res *= $i;
    }
    return $res;
}

// Example 
$num = 5;
echo "Factorial of $num is " . factorial($num) . "\n";
?>