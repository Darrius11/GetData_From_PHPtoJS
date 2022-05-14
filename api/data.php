<?php
$dataSet = [
  1 => [
    'firstName' => 'Susi',
    'lastName' => 'Muster',
    'email' => 'susi@muster.at'
  ],
  2 => [
    'firstName' => 'Max',
    'lastName' => 'Huber',
    'email' => 'max_huber@chello.at'
  ],
  3 => [
    'firstName' => 'Andrea',
    'lastName' => 'Zoufal',
    'email' => 'andy@gmail.com'
  ]
];

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  echo(json_encode($dataSet[$id]));
} else {
  echo(json_encode('No ID provided'));
}
