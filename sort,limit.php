<?php

require_once 'vendor/autoload.php';

$collection = (new MongoDB\Client)->learn->users;

$result = $collection->find(array(), array('limit' => 10, 'sort'=> array('saved_at' => 1),  'skip' =>3));
echo '<pre>';
foreach ($result as $r) {

	print_r($r['title'] ." " . ":". " " . $r['content'] ." " . ":". " " . $r['saved_at']) ; echo '<br>';

}
