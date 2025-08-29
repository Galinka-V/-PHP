<?php
session_start();

if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0;
}

$_SESSION['visit_count']++;

if ($_SESSION['visit_count'] % 3 == 0) {
    header('Location: result.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Счётчик посещений</title>
</head>
<body>
    <h1>Вы посетили эту страницу <?php echo $_SESSION['visit_count']; ?> раз(а)</h1>
    <p>При 3-м, 6-м, 9-м и т.д. посещении произойдёт редирект на страницу с результатом.</p>
</body>
</html>
