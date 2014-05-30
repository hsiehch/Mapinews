<?php

	$urlLocal_ylcytn = "http://udn.com/udnrss/local_ylcytn.xml";
	$xmlLocal_ylcytn = simplexml_load_file($urlLocal_ylcytn);

	foreach ($xmlLocal_ylcytn->channel->item as $item) 
	{

		$news["title"] = urlencode($item->title);
		$news["link"] = urlencode($item->link);
		$output[] = $news;
	}
	echo urldecode(json_encode($output));


?>