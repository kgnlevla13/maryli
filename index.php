<?php

require __DIR__ .'/app/init.php';

$routeExplode = explode('?', $_SERVER['REQUEST_URI']);
$routeArrayMerge = array_filter(explode('/', $routeExplode[0]));
$route = array_merge($routeArrayMerge);

if (SUBFOLDER_NAME != '/'){
	array_shift($route);
}

if (!route(0)) {
	$route[0] = 'index';
}

if (route(1)) {
	$classes = $db->from('classes')->where('class_id',route(1))->first();

	if ($classes && permalink($classes['classtitle']) == route(0)) {
		$route[0] = 'class-details';
		$route[1] = permalink($classes['classtitle']);
		$route[2] = $classes['class_id'];
	}
}

if (route(1)) {
	$events = $db->from('events')->where('event_id',route(1))->first();

	if ($events && permalink($events['event_title']) == route(0)) {
		$route[0] = 'event-details';
		$route[1] = permalink($events['event_title']);
		$route[2] = $events['event_id'];
	}
}

if (route(1)) {
	$bloggers = $db->from('blog')->where('blog_id',route(1))->first();

	if ($bloggers && permalink($bloggers['blogtitle']) == route(0)) {
		$route[0] = 'blog-details';
		$route[1] = permalink($bloggers['blogtitle']);
		$route[2] = $bloggers['blog_id'];
	}
}

if (route(1)) {
	$bloggers = $db->from('aboutpage')->where('id',route(1))->first();

	if ($bloggers && permalink($bloggers['title']) == route(0)) {
		$route[0] = 'about';
		$route[1] = permalink($bloggers['title']);
		$route[2] = $bloggers['id'];
	}
}

if (!file_exists(controller(route(0)))) {
	$route[0] = '404';
}

$setting = $db->from('settings')->first();

require controller(route(0));
