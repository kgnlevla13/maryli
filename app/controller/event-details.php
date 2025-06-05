<?php 

$id = route(2);

if (!$id) {
	header("Location:" . site_url('404'));
	exit();
}

$row = $db->from("events")
->where("event_id",$id)
->first();

if (!$row) {
	header("Location:" . site_url('404'));
	exit();
}

$originalDate = $row['event_start_date'];
$dateTime = new DateTime($originalDate);
$formattedDate = $dateTime->format('j F Y');


$cookie_name = 'event_viewed_'.$id;
$cookie_expiry = time() + (60 * 60 * 24);

if (!isset($_COOKIE[$cookie_name])) {

	$stmt = $db->prepare("UPDATE events SET view = view + 1 WHERE event_id = :class_id");
	$stmt->bindParam(':class_id', $id, PDO::PARAM_INT);
	$stmt->execute();

	setcookie($cookie_name, 'viewed', $cookie_expiry, "/");
}


$current_post_id = $id;  

$prev_post_query = $db->prepare("
	SELECT * FROM events
	WHERE event_id < :current_post_id
	ORDER BY event_id DESC
	LIMIT 1
	");
$prev_post_query->bindParam(':current_post_id', $current_post_id, PDO::PARAM_INT);
$prev_post_query->execute();
$prev_post = $prev_post_query->fetch(PDO::FETCH_ASSOC);

// Sonraki yazıya ulaşmak için
$next_post_query = $db->prepare("
	SELECT * FROM events
	WHERE event_id > :current_post_id
	ORDER BY event_id ASC
	LIMIT 1
	");
$next_post_query->bindParam(':current_post_id', $current_post_id, PDO::PARAM_INT);
$next_post_query->execute();
$next_post = $next_post_query->fetch(PDO::FETCH_ASSOC);



$meta = [
	'title' => $row['event_title'],
];


require view('event-details');