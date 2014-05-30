<?php


	$urlLocal_taipei = 'http://udn.com/udnrss/local_taipei.xml';
	$xmlLocal_taipei = simplexml_load_file($urlLocal_taipei);

	foreach ($xmlLocal_taipei->channel->item as $item) 
	{

		$news["title"] = urlencode($item->title);
		$news["link"] = urlencode($item->link);
		$output[] = $news;
	}
	echo urldecode(json_encode($output));


?>