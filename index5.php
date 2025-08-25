<?php

function generateList($year, $month) {
    // определяю имя месяца
    $monthName = date("F", mktime(0, 0, 0, $month, 1, $year));
    
    // количество дней в месяце
    $countDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    
    // cписок всех дней месяца
    $list = [];
    
    // с 1-го числа
    $currentDay = 1;
    
    // pабочие дни (сутки через двое)
    $workDays = 0;
    
    while ($currentDay <= $countDays) {
        // попадает текущий день на рабочий день
        if ($workDays % 3 == 0) {
            // рабочий день
            $list[] = "+ \033[31m$currentDay\033[0m + run";
            $workDays++;
        } else {
            // выходной день
            $list[] = "$currentDay ";
            // если это выходной день, то пропускаем 2 дня
            if ($workDays % 3 == 2) {
                $currentDay += 2;
                $workDays++;
            } else {
                $workDays++;
            }
        }
        $currentDay++;
    }

    // результат
    echo "$monthName "."$year"."\n";
    foreach ($list as $day) {
        echo $day . "\n";
    }
}

// год и месяц который расчитываю
$year = 2025;
$month = 9;

generateList($year, $month); 
?>
