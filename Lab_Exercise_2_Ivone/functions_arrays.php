<?php

//Membuat sebuah class "Student"
class Student {
    public $name;
    public $birthDate;
    public $sex;
    public $gpa;

//Membuat constructor class berisikan parameter sesuai dgn atribut class tsb
    public function __construct($name, $birthDate, $sex, $gpa) {
        $this->name = $name;
        $this->birthDate = $birthDate;
        $this->sex = $sex;
        $this->gpa = $gpa;
    }

//Method untuk menghitung umur berdasarkan selisih tgl lahir dan tgl hari ini (y/m/d)
    public function getAge() {
        $birthday = new DateTime($this->birthDate);
        $dateToday = new DateTime();
        $selisih = $dateToday->diff($birthday);
        return $selisih->y . " tahun, " . $selisih->m . " bulan, " . $selisih->d . " hari";
    }
}

//Function untuk greet
function greet($name) {
    echo "Hello $name!" . "<br>";
}

//Array yang berisikan 5 objek dari class Student
$students = [
    new Student("Ivone", "2005-10-12", "Female", 3.92),
    new Student("Alicia", "2005-12-13", "Female", 4.00),
    new Student("Felicia", "2005-03-07", "Female", 3.92),
    new Student("Leonard", "2005-11-12", "Male", 3.92),
    new Student("Chaiden", "2005-07-12", "Male", 3.96),
];


//Looping fungsi "greet" untuk setiap elemen dalam array students
foreach($students as $student) {
    greet($student->name);
}




