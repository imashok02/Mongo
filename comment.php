<?php

require_once 'vendor/autoload.php';


$id = $_POST['article_id'];

$collection = (new MongoDB\Client)->learn->users;

$article = $collection->findOne(array('_id' => new MongoDB\BSON\ObjectID($id)));

$comment = array(
		'name' => $_POST['commenter_name'],
		'email' =>$_POST['commenter_email'],
		'comment' => $_POST['comment'],
		'posted at' => new MongoDB\BSON\UTCDateTime
	);

$collection->updateOne(array('_id' => new MongoDB\BSON\ObjectID($id)), array('$push' => array('comments' => $comment)));
header('Location: findOne.php?id=' .$id);