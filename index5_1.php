<?php

function generateList($year, $month) {
    // определяем название месяца на русском языке
    $monthName = date("F", mktime(0, 0, 0, $month, 1, $year));

    // определяем количество дней в месяце
    $countDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    // массив для хранения расписания
    $schedule = [];

    // первый день месяца
    $currentDay = 1;

    // счетчик рабочих дней (сутки через двое)
    $workDayCounter = 0;

    while ($currentDay <= $countDays) {
        $dayOfWeek = date('N', strtotime($year . '-' . $month . '-' . $currentDay));

        // проверяем, является ли текущий день рабочим
        if ($workDayCounter % 3 == 0) {
            if ($dayOfWeek == 6 || $dayOfWeek == 7) {
                $daysToMonday = 8 - $dayOfWeek;
                $currentDay += $daysToMonday;
                if($currentDay > $countDays){
                  break;
                }
                $dayOfWeek = date('N', strtotime($year . '-' . $month . '-' . $currentDay));
                $schedule[] = "+ \033[31m$currentDay\033[0m + ";
            } else {
                $schedule[] = "+ \033[31m$currentDay\033[0m +"; // рабочий день, выделен красным и +
            }
            $workDayCounter++;
        } else {
            $schedule[] = "$currentDay"; // выходной день
            $workDayCounter++;
        }

        $currentDay++;
    }

    // название месяца и года
    echo "$monthName $year\n";

    // расписание
    foreach ($schedule as $day) {
        echo $day . "\n";
    }
}

// год и месяц для расчета
$year = 2025;
$month = 9;

generateList($year, $month);

?>
