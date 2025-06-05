<?php

function site_url($url = false){
	return URL . '/' . $url;
}

function public_url($url = false)
{
	return URL . '/public/' . $url;
}

function cut_text($str, $limit = 220)
{
	$str = strip_tags(htmlspecialchars_decode($str));
	$length = mb_strlen($str, 'UTF-8');

	if ($length > $limit) {
		$str = rtrim(mb_substr($str, 0, $limit, 'UTF-8'));
		$str .= '..';
	}

	return $str;
}