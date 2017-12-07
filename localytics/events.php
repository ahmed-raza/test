<?php

  $credentials = [
    'api_key'     => '16f97ca90537692acb90df2-748ab32c-f884-11e3-6b61-0097b986e70c',
    'api_secret'  => '6dc308f856062bacbb043cb-748ab4e4-f884-11e3-6b61-0097b986e70c',
  ];
  $query = '?app_id=b27449b0630d7647530290d-37ca28a2-bd7d-11e7-2174-007c928ca240&metrics=occurrences&dimensions=event_name&conditions=';
  $query .= urlencode('{"day":["between","2017-11-01","2017-11-21"]}');
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
  $response = json_decode($response);
?>

<h1>Users by Events</h1>

<table border="1">
  <tr>
    <th>Event</th>
    <th>Users</th>
  </tr>
  <?php foreach($response->results as $result): ?>
  <tr>
    <td><?php echo $result->event_name; ?></td>
    <td><?php echo $result->occurrences; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
