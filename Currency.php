<?php

namespace App\Services;

class Currency {

	public $url;

	public function __construct()
	{
		$this->url = "https://openexchangerates.org/api/latest.json?app_id=";
	}

	public function rate()
	{
		return $this->curl();
	}

	public function curl()
	{
	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL, $this->url);
	    curl_setopt($curl, CURLOPT_BINARYTRANSFER, true);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    $jsonData = json_decode(curl_exec($curl));
	    curl_close($curl);		
	    return $jsonData;
	}

}