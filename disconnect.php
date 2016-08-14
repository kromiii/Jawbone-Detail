<?php
$headers = [
    "Host: jawbone.com",
    "Authorization: Bearer {$_GET['access_token']}",
];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://jawbone.com/nudge/api/v.1.0/users/@me/PartnerAppMembership",
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_HTTPHEADER => $headers,
]);
$res = curl_exec($curl);
curl_close($curl);

$cert = json_decode(file_get_contents('cert.json'), true);
header("Location: {$cert['appurl']}");
?>
