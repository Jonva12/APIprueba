<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imgurController extends Controller
{
    public function index(Request $request)
    {
    	$foto = $request->file('foto');
    	$image64 = base64_encode(file_get_contents($foto)); //pasar la foto a base64
		$curl = curl_init();

		$client_id = "156b84d4200db32";

        $token = "069cac5f48b9585d591077bc9dab9be4a6f5bcc5";

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.imgur.com/3/image",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => false,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => array('image' => $image64),
		  CURLOPT_HTTPHEADER => array(
		    "Authorization: Bearer ".$token
		  ),
		));

		$response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $json = json_decode($response, true);
        }
        return view('welcome', ['foto' => $json['data']['link']]);
	} 
}
