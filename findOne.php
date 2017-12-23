<?php

require_once 'vendor/autoload.php';

$id = $_GET['id'];

try
{
	$connection = new MongoDB\Client("mongodb://localhost:27017");

	$database = $connection->learn;
	$collection = $database->users;
}
catch(MongoConnectionException $e)
{
	die("failed to connect db" . $e->getMesage());
}

$article = $collection->findOne(array('_id' => new  MongoDB\BSON\ObjectID($id)));

print_r($article['content']);

?>

