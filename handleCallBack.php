<?php
$cert_json = file_get_contents('./cert.json');
$cert_arr = json_decode($cert_json, true);
$code = $_GET["code"];
$url_params = [
    'client_id' => $cert_arr['client_id'],
    'client_secret' => $cert_arr['client_secret'],
    'grant_type' => 'authorization_code',
    'code' => $code,
];
$url = 'https://jawbone.com/auth/oauth2/token?'.http_build_query($url_params);
$token_json = file_get_contents($url);
$token_array = json_decode($token_json, true);
$url_params = [
    'access_token' => $token_array['access_token'],
    'refresh_token' => $token_array['refresh_token'],
];
$url = $cert_arr['appurl'].'endpoints.php?'.http_build_query($url_params);
header('Location: '.$url);
exit;
?>
