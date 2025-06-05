<?php 


$meta = [
	'title' => 'Blog',
];

if (get('category')) {
	$totalRecord = $db->from("blog")
	->where('status','Publish')
	->where('blogdatetime ', 'NOW()', '<')
	->where('blogcategory ', get('category'))
	->select("count('blog_id') as total")
	->total();

	$pageLimit = 15;
	$pageParam = "page";
	$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

	$query = $db->from("blog")
	->where('status','Publish')
	->where('blogdatetime ', 'NOW()', '<')
	->where('blogcategory ', get('category'))
	->orderby('blog_id', 'DESC')
	->limit($pagination["start"], $pagination["limit"])
	->all();
}
elseif (get('tag')) {

	$totalRecord = $db->from("blog")
	->where('status','Publish')
	->where('blogdatetime ', 'NOW()', '<')
	->where('blogtag ', get('tag'), 'LIKE')
	->select("count('blog_id') as total")
	->total();

	$pageLimit = 15;
	$pageParam = "page";
	$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

	$query = $db->from("blog")
	->where('status','Publish')
	->where('blogdatetime', 'NOW()', '<')
	->where('blogtag', get('tag'), 'LIKE')
	->orderby('blog_id', 'DESC')
	->limit($pagination["start"], $pagination["limit"])
	->all();
}
elseif (get('q')) {

	$totalRecord = $db->from("blog")
	->where('status','Publish')
	->where('blogdatetime ', 'NOW()', '<')
	->where('blogtitle', get('q'), 'LIKE')
	->select("count('blog_id ') as total")
	->total();

	$pageLimit = 15;
	$pageParam = "page";
	$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

	$query = $db->from("blog")
	->where('status','Publish')
	->where('blogdatetime ', 'NOW()', '<')
	->where('blogtitle', get('q'), 'LIKE')
	->orderby('blog_id', 'DESC')
	->limit($pagination["start"], $pagination["limit"])
	->all();
}
else{
	$totalRecord = $db->from("blog")
	->where('status','Publish')
	->where('blogdatetime ', 'NOW()', '<')
	->select("count('blog_id ') as total")
	->total();

	$pageLimit = 15;
	$pageParam = "page";
	$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

	$query = $db->from("blog")
	->where('status','Publish')
	->where('blogdatetime ', 'NOW()', '<')
	->orderby('blog_id', 'DESC')
	->limit($pagination["start"], $pagination["limit"])
	->all();
}


$mostreads = $db->from('blog')
->where('status','Publish')
->where('blogdatetime ', 'NOW()', '<')
->orderby('view', 'DESC')
->limit(0,3)
->all();


$allcategories = $db->from('categories')
->all();



require view('blog');