<?php
$name =  readline();
$surname = readline();
$patronymic = readline();
$fName = ucfirst($name);
$fSurname = ucfirst($surname);
$fpPatronymic = ucfirst($patronymic);
$fullName  = "$fSurname $fName $fpPatronymic\n";
$fio = "$fName[0] $fSurname[0] $fpPatronymic[0]\n";
$surnameAndInitials ="$fSurname $fName[0].$fpPatronymic[0].\n";
$variables = array($fullName, $fio, $surnameAndInitials);
foreach ($variables as $i) {
    echo $i;
}