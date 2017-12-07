<?php

  $credentials = [
    'api_key'     => '16f97ca90537692acb90df2-748ab32c-f884-11e3-6b61-0097b986e70c',
    'api_secret'  => '6dc308f856062bacbb043cb-748ab4e4-f884-11e3-6b61-0097b986e70c',
  ];
  $query = '';
  if (isset($_GET['profile_attribute_key']) && !empty($_GET['profile_attribute_key'])) {
    $query = '?app_id=b27449b0630d7647530290d-37ca28a2-bd7d-11e7-2174-007c928ca240&profiledb_id=30175&metrics=profiles&dimensions=profile_value_string&conditions=';
    $query .= urlencode('{"profile_attribute_key":"'.$_GET['profile_attribute_key'].'"}');
  } else {
    $query = '?app_id=b27449b0630d7647530290d-37ca28a2-bd7d-11e7-2174-007c928ca240&profiledb_id=30175&metrics=profiles&dimensions=profile_attribute_key';
  }
  $ch = curl_init();
  curl_setopt_array($ch, array(
      CURLOPT_HTTPGET => TRUE,
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_URL => 'https://api.localytics.com/v1/query'.$query,
      CURLOPT_USERPWD => $credentials['api_key'].':'.$credentials['api_secret'],
      CURLOPT_HTTPHEADER => array(
        'Accept: application/vnd.localytics.v1+hal+json'
      ),
  ));
  $response = curl_exec($ch);
  curl_close($ch);
  print_r($response);
  // $response = json_decode($response);
