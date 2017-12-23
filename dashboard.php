<?php

require_once 'vendor/autoload.php';

// try{
// 	$connection = new MongoDB\Client("mongodb://127.0.0.1:27017");

// 	$collection = $connection->learn->users;
// }
// catch(MongoConnectionException $e)
// {
// 	die("Connection error" . $e->getMessage());
// }
$collection = (new MongoDB\Client)->learn->users;
$result = $collection->find();

foreach ($result as $r) {
	 echo '<pre>';
	print_r($r['title']);
	 echo '<pre>';
}

//
//  var_dump($result);
//  echo '<pre>';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Baby</title>
</head>
<body>

	

</body>
</html>


