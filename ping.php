<?php
$url = 'http://oasis.jmarchini.org/';

$ping_urls = [
    "http://pingomatic.com/ping/?title=My+Site&blogurl=$url&rssurl=$url",
    "http://rpc.pingomatic.com",
    "http://blogsearch.google.com/ping/RPC2"
];

foreach ($ping_urls as $ping_url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $ping_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}

echo "Ping berhasil dikirim!";
?>