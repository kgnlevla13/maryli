<?php
$file = __DIR__ . '/assets/docs/yoga-made-simple-by-mary-li-e-book.pdf';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="yoga-made-simple.pdf"');
    header('Content-Length: ' . filesize($file));
    flush(); // output buffering varsa temizle
    readfile($file);
    exit;
} else {
    echo "File not found.";
}
