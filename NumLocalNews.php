<?php


	$urlLocal_taipei = 'http://udn.com/udnrss/local_taipei.xml';   
	$urlLocal_tcchnt ="http://udn.com/udnrss/local_tcchnt.xml";
	$urlLocal_ksptisland ="http://udn.com/udnrss/local_ksptisland.xml";
	$urlLocal_tyhcml ="http://udn.com/udnrss/local_tyhcml.xml";
	$urlLocal_ylcytn = "http://udn.com/udnrss/local_ylcytn.xml";
	$urlLocal_klilhltt = "http://udn.com/udnrss/local_klilhltt.xml";



	$xmllLocal_taipei = simplexml_load_file($urlLocal_taipei);
	$xmlLocal_tcchnt = simplexml_load_file($urlLocal_tcchnt);
	$xmlLocal_ksptisland = simplexml_load_file($urlLocal_ksptisland);
	$xmlLocal_tyhcml = simplexml_load_file($urlLocal_tyhcml);
	$xmlLocal_ylcytn = simplexml_load_file($urlLocal_ylcytn);
	$xmlLocal_klilhltt = simplexml_load_file($urlLocal_klilhltt);


	$countLocal_taipei = 0;
	$countLocal_tcchnt = 0;
	$countLocal_ksptisland = 0;
	$countLocal_tyhcml = 0;
	$countLocal_ylcytn = 0;
	$countLocal_klilhltt = 0;



	foreach ($xmllLocal_taipei->channel->item as $item) 
	{	
		$countLocal_taipei ++ ;
	}

	foreach ($xmlLocal_tcchnt->channel->item as $item) 
	{
		$countLocal_tcchnt ++;
	}

	foreach ($xmlLocal_ksptisland->channel->item as $item) 
	{
		$countLocal_ksptisland ++;
	}

	foreach ($xmlLocal_tyhcml->channel->item as $item) 
	{
		$countLocal_tyhcml ++;
	}

	foreach ($xmlLocal_ylcytn->channel->item as $item) 
	{
		$countLocal_ylcytn ++;
	}

	foreach ($xmlLocal_klilhltt->channel->item as $item) 
	{
		$countLocal_klilhltt ++;
	}

	$countLocalNews["Local_taipei"] = $countLocal_taipei;
	$countLocalNews["Local_tcchnt"] = $countLocal_tcchnt;
	$countLocalNews["Local_ksptisland"] = $Local_ksptisland;
	$countLocalNews["Local_tyhcml"] = $countLocal_tyhcml;	
	$countLocalNews["Local_ylcytn"] = $countLocal_ylcytn;
	$countLocalNews["Local_klilhltt"] = $countLocal_klilhltt;

	$output[] = $countLocalNews;
	echo json_encode($output);

?>