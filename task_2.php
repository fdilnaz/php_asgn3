<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function is_odd($numbers){
    return $numbers % 2 !== 0;
}

$odd_numbers = array_filter($numbers, 'is_odd');

print_r( $odd_numbers);
