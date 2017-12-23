<?php

require_once 'vendor/autoload.php';


try{
	$connection = new MongoDB\Client("mongodb://localhost:27017");

	$collection = $connection->learn->users;
}
catch(MongoConnectException $e)
{
	die("failed to connect db" . $e->getMessage());
}
$result = $collection->find();
foreach ($result as $r) {
	 echo '<pre>';
	print_r($r);
	 echo '<pre>';
	}
?>


<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
 lang="en">
 <head>
 <meta http-equiv="Content-Type" content="text/html;
 charset=utf-8"/>
 <link rel="stylesheet" href="style.css" />
 <title>My Blog Site</title>
 </head>
 <body>
 <div id="contentarea">
 <div id="innercontentarea">
 <h1>My Blogs</h1>
 <h2><?php //echo $cursor['title']; ?></h2>
 <p>
 <?php //echo substr($cursor['content']) ?>
 </p>
 <a href="blog.php?id=<?php //echo $article['_id'];
 ?>">Read more</a>

 </div>
 </div>
 </body>
</html>
 -->