<?php
/*********************************************************************
File:- reply.php
Author:- Kiran Trimbake

This file recive the query and call api through curl post "Gupshup.oi".
Post URL:- http://api.gupshup.io/sm/api/v1/nlp/nlponthefly.
Api Key:- cc8405d72e794c1bcc62d6919fca5e75
veriation.php calls from this file.

**********************************************************************/


$query=$_POST['query'];

include('veriation.php');
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.gupshup.io/sm/api/v1/nlp/nlponthefly",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => 'data='.$data,
  CURLOPT_HTTPHEADER => array(
    "apikey: cc8405d72e794c1bcc62d6919fca5e75",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $res=json_decode($response);

  if(!empty($res)){
		if(isset($res[0]->topIntents) && !empty($res[0]->topIntents) ){
			$topIntents=$res[0]->topIntents;  
			if(!empty($topIntents) && $topIntents[0]->score>0.1){
				echo $topIntents[0]->variation;
				//echo $topIntents[0]->variation.'  '.$topIntents[0]->score;		
			}else{
				echo "Please contact support for more information! anything else i can do for you?";		
      }
		}else{
			echo "Please contact support for more information! anything else i can do for you?";
		}
  }else{
		echo "Please contact support for more information! anything else i can do for you?";
  }
}