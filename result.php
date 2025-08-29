<?php
session_start();

$visit_count = isset($_SESSION['visit_count']) ? $_SESSION['visit_count'] : 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Результат</title>
</head>
<body>
    <h1>Третья страница была открыта <?php echo $visit_count; ?> раз(а)</h1>
    <p><a href="counter.php">Вернуться к счётчику</a></p>
    <p><a href="index.php">На главную</a></p>
</body>
</html>
