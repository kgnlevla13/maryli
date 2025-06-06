<?php

$meta = [
    'title' => 'Newsletter Subscribers'
];

// Toplam abone sayısını al
$totalRecord = $db->from("subscribes")
    ->select("count('id') as total")
    ->total();

$pageLimit = 1000;
$pageParam = "page";
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

// Aboneleri al
$subscribers = $db->from("subscribes")
    ->orderby('id', 'DESC')
    ->limit($pagination["start"], $pagination["limit"])
    ->all();

require admin_view('newsletter');