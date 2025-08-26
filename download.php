<?php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="downloaded_text.txt"');
    echo $text;
    exit;
} else {
    echo "Параметр 'text' не указан в URL";
}
?>
