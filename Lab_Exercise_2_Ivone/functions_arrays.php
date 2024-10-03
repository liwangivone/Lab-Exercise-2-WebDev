<?php

class Student {
    public $name;
    public $birthDate;
    public $sex;
    public $gpa;

    public function __construct($name, $birthDate, $sex, $gpa) {
        $this->name = $name;
        $this->birthDate = $birthDate;
        $this->sex = $sex;
        $this->gpa = $gpa;
    }

    public function getAge() {
        $birthday = new DateTime($this->birthDate);
        $dateToday = new DateTime();
        $selisih = $dateToday->diff($birthday);
        return $selisih->y . " tahun, " . $selisih->m . " bulan, " . $selisih->d . " hari";
    }
}

function greet($name) {
    echo "Hello $name!" . "<br>";
}

$students = [
    new Student("Ivone", "2005-10-12", "Female", 3.92),
    new Student("Alicia", "2005-12-13", "Female", 4.00),
    new Student("Felicia", "2005-03-07", "Female", 3.92),
    new Student("Leonard", "2005-11-12", "Male", 3.92),
    new Student("Chaiden", "2005-07-12", "Male", 3.96),
];

foreach($students as $student) {
    greet($student->name);
}




