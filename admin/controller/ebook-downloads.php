<?php

$meta = [
    'title' => 'Ebook Downloads'
];

// Toplam indirme sayısını al
$totalRecord = $db->from("ebook_downloads")
    ->select("count('id') as total")
    ->total();

$pageLimit = 1000;
$pageParam = "page";
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

// Ebook indirenleri al
$downloads = $db->from("ebook_downloads")
    ->orderby('id', 'DESC')
    ->limit($pagination["start"], $pagination["limit"])
    ->all();

require admin_view('ebook-downloads');