<?php 
echo "Введите имя: ";
$firstName = trim(fgets(STDIN));

echo "Введите отчество: ";
$middleName = trim(fgets(STDIN));   

echo "Введите фамилию: ";
$lastName = trim(fgets(STDIN));


function mb_ucfirst($string) {
    return mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
}


$fullname = mb_ucfirst($lastName) . ' ' . mb_ucfirst($firstName) . ' ' . mb_ucfirst($middleName);
echo "Полное имя: " . $fullname . PHP_EOL; 


$I = mb_strtoupper(mb_substr($firstName, 0, 1));
$O = mb_strtoupper(mb_substr($middleName, 0, 1));
$surnameAndInitials = mb_ucfirst($lastName) . " " . $I . "." . $O . ".";
echo "Фамилия и инициалы: " . $surnameAndInitials . PHP_EOL;


$F = mb_strtoupper(mb_substr($lastName, 0, 1));
echo "Аббревиатура: " . $F . $I . $O . PHP_EOL;
?>
