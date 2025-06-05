<?php 

$meta = [
	'title' => 'About',
];

// About sayfası için pagination ayarları
$pageLimit = 10;
$pageParam = "page";

// Toplam kayıt sayısını al
$totalRecord = $db->from("aboutpage")
	->select("count('id') as total")
	->where('status', 'active')
	->total();

// Pagination ayarlarını oluştur
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

// About verilerini çek
$abouts = $db->from("aboutpage")
	->where('status', 'active')
	->orderby('id', 'ASC')
	->limit($pagination["start"], $pagination["limit"])
	->all();

require view('about');