<?php

$name = "Ivone";

$birthDate = "2005-10-12";

$birthday = new DateTime($birthDate);

$dateToday = new DateTime();

$selisih = $dateToday->diff($birthday);

$sex = "Female";

$gpa = 3.92;

$age = "Umur: " . $selisih->y . " tahun, " . $selisih->m . " bulan, " . $selisih->d . " hari.";

$isStudent = TRUE;

echo $age;

?>
