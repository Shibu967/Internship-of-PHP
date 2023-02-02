<?php
// An array that represents a possible record set returned from a database
$a = array(
  array(
    'id' => 2,
    'first_name' => 'shibu',
    'last_name' => 'kumari',//this is multidimensinal array
  ),
  array(
    'id' => 5,
    'first_name' => 'simran',
    'last_name' => 'kumari',
  ),
  array(
    'id' => 3,
    'first_name' => 'sonu',
    'last_name' => 'kumar',
  )
);
echo"<pre>";
$last_names = array_column($a, 'last_name');
echo"<pre>";
print_r($last_names);
echo"</pre>";
?>