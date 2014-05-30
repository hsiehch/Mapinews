<?php

	$urlLocal_tyhcml ="http://udn.com/udnrss/local_tyhcml.xml"; 
	$xmlLocal_tyhcml = simplexml_load_file($urlLocal_tyhcml);

	foreach ($xmlLocal_tyhcml->channel->item as $item) 
	{

		$news["title"] = urlencode($item->title);
		$news["link"] = urlencode($item->link);
		$output[] = $news;
	}
	echo urldecode(json_encode($output));


?>