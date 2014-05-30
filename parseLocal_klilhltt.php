<?php

	$urlLocal_klilhltt = "http://udn.com/udnrss/local_klilhltt.xml";
	$xmlLocal_klilhltt = simplexml_load_file($urlLocal_klilhltt);

	foreach ($xmlLocal_klilhltt->channel->item as $item) 
	{

		$news["title"] = urlencode($item->title);
		$news["link"] = urlencode($item->link);
		$output[] = $news;
	}
	echo urldecode(json_encode($output));


?>