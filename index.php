<?php
$web = $_GET["web"];
$key = $_GET["key"];
function _url_($url){
	$curl_handle=curl_init();
	curl_setopt($curl_handle, CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	$query = curl_exec($curl_handle);
	curl_close($curl_handle);
	return $query;
}

echo(_url_("https://x2-coin.000webhostapp.com/index.php?key=6LdtYfImAAAAAEko9l9UT9_3ZwWxmCOAZAZreex7&web=https://blog-share.xyz/recaptcha.php"));
