<?php
$access_token = 'PeMxC/QM1kYhTS7ODHWQz7xNf++pDtHCWSX1ElVClFjuFJgKnpuPI4dVPu1qzERY/R36hp/ZihvOG4eQosRdzhw6hZIjeYpcVoHCciFIis82XWy8YCUPC5zlaT00BQUvKc2Qjjleq3Lddd7CgSBQOwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;