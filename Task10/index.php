<?php
interface HouseCleaning {
    public function cleanRoom();
    public function cleanKitchen();
}

abstract class Human implements HouseCleaning {
    protected $role;

    public function __construct($role) {
        $this->role = $role;
    }

    public function cleanRoom() {
        echo "{$this->role} прибирає кімнату\n";
    }

    public function cleanKitchen() {
        echo "{$this->role} прибирає кухню\n";
    }
}

class Student extends Human {
    public function __construct() {
        parent::__construct("Студент");
    }
}

class Programmer extends Human {
    public function __construct() {
        parent::__construct("Програміст");
    }
}

// Тестування
$student = new Student();
$programmer = new Programmer();

$student->cleanRoom();
$student->cleanKitchen();

echo "\n";

$programmer->cleanRoom();
$programmer->cleanKitchen();
?>
