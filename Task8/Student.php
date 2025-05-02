<?php
require_once 'Human.php';

class Student extends Human {
    private string $university;
    private int $course;

    public function __construct(float $height, float $weight, int $age, string $university, int $course) {
        parent::__construct($height, $weight, $age);
        $this->university = $university;
        $this->course = $course;
    }

    public function getUniversity(): string { return $this->university; }
    public function getCourse(): int { return $this->course; }

    public function setUniversity(string $university): void { $this->university = $university; }
    public function setCourse(int $course): void { $this->course = $course; }

    public function nextCourse(): void {
        $this->course++;
    }
}
