<?php

require_once 'session.php';
require_once 'User.php';

$user = new User();
$user->logout();

header('Location: Login.php');
exit;