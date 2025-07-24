 <?php 
    
    // Скрипт должен принимать два значения в поток stdin.
    /*$Number1 = trim(fgets(STDIN));
    $Number2 = trim(fgets(STDIN));*/

   
    $input = fopen('php://stdin', 'r');
    $Number1 = trim(fgets($input));
    $Number2 = trim(fgets($input));
   
    //Если одно из значений не является числом, то в поток stderr необходимо вывести сообщение «Введите, пожалуйста, число».
      if (!ctype_digit($Number1) || !ctype_digit($Number2)) {
          fwrite(STDERR, "Введите, пожалуйста, число");
          exit;
      }

    // Скрипт должен проверять, что оба значения — это целочисленное число (int).
    $Number1 = intval($Number1);
    $Number2 = intval($Number2);

    // Не забываем, что делить на ноль нельзя. Необходимо проверить, что второе число не равно нулю. Если равно, вывести в поток stderr сообщение «Делить на 0 нельзя».
    if ($Number2 === 0) {
        fwrite(STDERR, "Делить на 0 нельзя");
        exit;
    }

    //Скрипт должен разделить первое число на второе.
    $result = $Number1 / $Number2;

    fwrite(STDOUT, $result);
    ?> 
