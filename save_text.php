<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_POST['file_name'] ?? "hasil_text_" . date("Ymd_His");
    $text = $_POST['user_text'] ?? '';

    $filename .=  ".txt";

    // Atur header agar browser mengunduh file
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . strlen($text));
    echo $text;
    exit;
}
?>
