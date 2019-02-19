<?php

class curl
{
	
    public function __construct($param, $route, $input = null)
    {
		const $URL = 'https://shiro-abd49.firebaseio.com/' . $route . '.json?auth=RgVdWcLc6gyzv4VMXmfTjyQlJkAuxIybVhjqRx36';
		
		if ($param == 'put'){
					
			$curl = curl_init();
			curl_setopt( $curl, CURLOPT_URL, $URL );
			curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PUT" );
			curl_setopt( $curl, CURLOPT_POSTFIELDS, json_encode($input) );
			curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
			$response = curl_exec( $curl );
			curl_close( $curl );
			
		} elseif ($param == 'get'){
		
			$curl = curl_init();
			curl_setopt( $curl, CURLOPT_URL, $URL );
			curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "GET" );
			curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
			$response = json_decode(curl_exec( $curl ), true);
			curl_close( $curl );
			
			return $response;
		
		}
		
    }
	
}
