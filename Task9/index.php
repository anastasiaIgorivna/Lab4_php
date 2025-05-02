<?php

require_once 'Student.php';
require_once 'Programmer.php';

$student = new Student(170, 65, 20, "КНУ", 2);
$programmer = new Programmer(180, 80, 30, ["PHP", "JS"], 4);

$student->actToday();
$programmer->actToday();
