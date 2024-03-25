<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://google-translate1.p.rapidapi.com/language/translate/v2",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "q=Hello%2C%20world!&target=vi&source=en",
	CURLOPT_HTTPHEADER => [
		"Accept-Encoding: application/gzip",
		"X-RapidAPI-Host: google-translate1.p.rapidapi.com",
		"X-RapidAPI-Key: 7665cb50d1msh4328508e68e7d26p1a0877jsn107f329d6445",
		"content-type: application/x-www-form-urlencoded"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} 
//else {
// 	echo $response;
// }
$array = json_decode($response, true);
// if($array["data"]["translate"][0] ["translatedText"] != null) $out_lang = $array["data"]["translattions"][0] ["translatedText"]
// else $out_lang = $array["message"];

?>

<h2>Ví dụ đọc PHP bằng API</h2>
<p style="...">Sử dụng API: google-translate1 từ  trang \url{https://rapidapi.com/googlecloud/api/google-translate1} </p>
</body>
</html> -->