<?php

$n = rand(1, 40);
$deviders = "";

for($i = 1; $i <= $n; $i++)
{
    if($i == $n){
        $deviders = $deviders."{$i}";
        $i++;
        continue;
    }
    if($n % $i == 0){
        $deviders = $deviders."$i, ";
    }
}

print "$n - $deviders";