<?php
// admin/controller/index.php dosyasına eklenecek istatistikler

$meta = [
	'title' => 'Home'
];

// Mevcut kodlar...
$bloggers = $db->from("blog")->all();
$classes = $db->from("classes")->all();

// Yeni istatistikler
$stats = [];

// 1. Toplam blog görüntülenme sayısı
$stats['total_blog_views'] = $db->from("blog")
    ->select("SUM(view) as total_views")
    ->first()['total_views'] ?? 0;

// 2. Toplam newsletter aboneleri
$stats['total_subscribers'] = $db->from("subscribes")
    ->select("count('id') as total")
    ->total();

// 3. Toplam e-book indirmeleri
$stats['total_ebook_downloads'] = $db->from("ebook_downloads")
    ->select("count('id') as total")
    ->total();

// 4. Bu ay eklenen blog yazıları
$stats['monthly_blogs'] = $db->from("blog")
    ->where('blogdatetime', date('Y-m-01'), '>=')
    ->where('blogdatetime', date('Y-m-t 23:59:59'), '<=')
    ->select("count('blog_id') as total")
    ->total();

// 5. Toplam sınıf görüntülenmeleri
$stats['total_class_views'] = $db->from("classes")
    ->select("SUM(view) as total_views")
    ->first()['total_views'] ?? 0;

// 6. Toplam etkinlik görüntülenmeleri  
$stats['total_event_views'] = $db->from("events")
    ->select("SUM(view) as total_views")
    ->first()['total_views'] ?? 0;

require admin_view('index');
?>