<?php
$i=1;
$j=0;

while($j<10000){
    echo "{$j}\n";
    echo"{$i}\n";
$j=$j+$i;
$i=$i+$j;
}