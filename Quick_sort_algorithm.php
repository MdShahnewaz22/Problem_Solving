<?php
$array=[8,7,9,5,6,4];
$sortarray= quickSort($array);
function quickSort($array){
        if(count($array)<2){
            return $array;
        }
        $pivot=$array[0];
        $left=array_filter(array_slice($array,1),fn($x)=>$x<=$pivot);
        $right=array_filter(array_slice($array,1),fn($x)=>$x>$pivot);
        $sortedLeft = quickSort($left);
        $sortedRight = quickSort($right);
         return array_merge($sortedLeft, [$pivot], $sortedRight);
}
print_r($sortarray);
?>
