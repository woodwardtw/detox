<?php 
	//https://dlinq.middcreate.net/wp-json/wp/v2/posts/?tags=358
	$url = 'https://dlinq.middcreate.net/wp-json/wp/v2/posts/?tags=358';
	$file = file_get_contents($url);
	file_put_contents('json/detox.json', $file);
?>