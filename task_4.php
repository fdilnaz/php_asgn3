<?php

$studentGrades = [
    'student_1' => [
        "Math"=> 82,
        "English" => 75,
        "Science" => 65
    ],
    'student_2' => [
        "Math"=> 65,
        "English" => 80,
        "Science" => 56
    ],
    'student_3' => [
        "Math"=> 84,
        "English" => 75,
        "Science" => 78
    ]
];


function grades($studentGrades){
    foreach($studentGrades as $students => $subjects){
        $total = 0;
        $count = count($subjects);

        foreach ($subjects as $subject => $number){
            $total += $number;
        }
        $average = $total/$count;
        
        echo $students . " average : " .$average ."\n";    
    }
}

grades($studentGrades);