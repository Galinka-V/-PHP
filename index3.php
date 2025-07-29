<?php 
// Запросить три переменные с именем, фамилией и отчеством.
echo "Введите имя: ";
$firstName = trim(fgets(STDIN));

echo "Введите отчество: ";
$middleName = trim(fgets(STDIN));   

echo "Введите фамилию: ";
$lastName = trim(fgets(STDIN));

//Объявить переменную $fullname, записать в неё полное ФИО так, чтобы каждое слово начиналось с большой буквы.  
$fullname = "$lastName $firstName $middleName";
echo "Полное имя:". ucwords($fullname), PHP_EOL; 

//Объявить переменную $surnameAndInitials. Её значением должна быть конкатенация фамилии с первой буквой в верхнем регистре, а также через пробел — инициалов. После каждой буквы инициалов должна быть точка.

$I=substr(ucfirst($firstName), 0, 1);
$O=substr(ucfirst($middleName), 0, 1);
$surnameAndInitials = ucfirst($lastName)." ". $I.".".$O.".";
echo "Фамилия и инициалы:".$surnameAndInitials, PHP_EOL;

//Объявить переменную $fio. Значением должна быть конкатенация первых букв в верхнем регистре.
$F=substr(ucfirst($lastName), 0, 1);
echo "Аббревиатура:".$F.$I.$O, PHP_EOL;
?>
