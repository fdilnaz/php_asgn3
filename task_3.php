<?php

$grades = [85, 92, 78, 88, 95];

function gradeNumbers($grades){
    rsort($grades); 
    print_r($grades);
}

gradeNumbers($grades);