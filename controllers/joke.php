<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://v2.jokeapi.dev/joke/Any?safe-mode&type=twopart');
$output = curl_exec($ch);
curl_close($ch);
$joke = json_decode($output, true);
$smarty->assign('joke', $joke);