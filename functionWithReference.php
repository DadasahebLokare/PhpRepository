<?php

function fun1(&$a,$b)
{
  $a+=2;
}

function fun2($s)
{
    $s+=2;
}
$o=10;
$p=20;
fun1($o,$p);
echo "<br>".$o.$p;

$j=1;
fun2($j);
echo "<br>".$j;
 ?>
