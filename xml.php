<?php
  $xml = simplexml_load_file("http://www.propertywire.com/feed/", 'SimpleXMLElement', LIBXML_NOCDATA);
?>
<pre>
  <?php
    $feed_items = $xml->channel->item;
    foreach ($feed_items as $key => $value) {
      $description = explode(" […]", $value->description);
      print_r($description[0]);
    }
  ?>
</pre>
