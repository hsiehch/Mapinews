<?php

	$urlLocal_tcchnt ="http://udn.com/udnrss/local_tcchnt.xml"; 
	$xmlLocal_tcchnt = simplexml_load_file($urlLocal_tcchnt);

	foreach ($xmlLocal_tcchnt->channel->item as $item) 
	{

		$news["title"] = urlencode($item->title);
		$news["link"] = urlencode($item->link);
		$output[] = $news;
	}
	echo urldecode(json_encode($output));


?>