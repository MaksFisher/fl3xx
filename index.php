<?php
require_once('views/base/header.php');

$sections = [
	'intro',
	'management',
	'about',
	'good-companie',
	'case',
	'news',
	'get-start',
];
foreach ($sections as $section) {
	include(__DIR__ . '/views/sections/home/' . $section . '.php');
}

require_once('views/base/footer.php');
