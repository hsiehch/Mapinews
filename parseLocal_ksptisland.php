<?php

	$urlLocal_ksptisland ="http://udn.com/udnrss/local_ksptisland.xml"; 
	$xmlLocal_ksptisland = simplexml_load_file($urlLocal_ksptisland);

	foreach ($xmlLocal_ksptisland->channel->item as $item) 
	{

		$news["title"] = urlencode($item->title);
		$news["link"] = urlencode($item->link);
		$output[] = $news;
	}
	echo urldecode(json_encode($output));


?>