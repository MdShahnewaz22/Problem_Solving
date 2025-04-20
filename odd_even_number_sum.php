
<?php
$n =3;
$oddsum =0;
for ($i=0;$i<=$n;$i++){
    if ($i %2 !=0){
        $oddsum +=$i;
    }
}
echo "Sum off Odd Numbers From 1 to $n is : $oddsum\n";

?>

<!-- if($i %2 !=0) Odd Number Sum 1+3+5..... -->
<!-- if($i %2 ==0) Even Number Sum 2+4+6..... -->
