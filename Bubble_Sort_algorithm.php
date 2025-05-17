<?php
$array=[8,7,9,5,6,4,1];
$sortarray=babblesort($array);
function babblesort($array){
    $n=count($array);
    for($i=0;$i<$n-1;$i++){
        for($j=0;$j<$n-$i-1;$j++){
            if($array[$j]>$array[$j+1]){
                $temp=$array[$j];
                $array[$j]=$array[$j+1];
                $array[$j+1]=$temp;
            }
        } 
    }
    return $array;
}
print_r($sortarray);
?>
