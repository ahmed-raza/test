<?php
$username = "cd61aa20ca0e42b3b571dd27e970a528";
$password = "ab8c1e862977c14456593f0310faa176";
$remote_url = 'https://api.intrinio.com/companies?ticker=AAPL';

// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header' => "Authorization: Basic " . base64_encode("$username:$password")                 
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents($remote_url, false, $context);

print_r($file);
?>
