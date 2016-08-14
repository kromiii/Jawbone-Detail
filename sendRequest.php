<?php
$cert_json = file_get_contents('./cert.json');
$cert_arr = json_decode($cert_json, true);
$url_params = [
    'response_type' => 'code',
    'client_id' => $cert_arr['client_id'],
    'scope' => 'move_read sleep_read',
    'redirect_uri' => $cert_arr['appurl'].'handleCallBack.php',
];
header('Location: '.'https://jawbone.com/auth/oauth2/auth?'.http_build_query($url_params));
exit;
?>
