<?php

$numbers = rand(7500, 10000);

$data = [
  'heat' => $numbers,
];

echo json_encode($data);
