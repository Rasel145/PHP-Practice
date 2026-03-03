<?php

//student Evaluation system

$score = readline("Enter your score (0-100 : ");
$attendance = readline("Enter your Attendance percentage (0-100: ");
$bonus = readline("Enter your bonus (0-10 :");

if ($score < 0 || $score > 100 || $attendance < 0 || $attendance > 100 || $bonus < 0 || $bonus > 10) {
    echo "Invalid input!";
} else {
    if ($score > 80 && $attendance > 75) {
        $grade =  "A";
    } else if ($score > 70 && $attendance > 60) {
        $grade = "B";
    } else if ($score > 60 && $attendance > 50) {
        $grade = "C";
    } else if ($score > 50 && $attendance < 40) {
        $grade = "D  (Low Attendance)";
    } else {
        $grade = "F";
    }


    if ($bonus > 5) {
        if ($grade === "B") $grade = "A";
        else if ($grade === "C") $grade = "B";
        else if ($grade === "D") $grade = "C";
    }
    echo "Final Grade : " . $grade;
}
