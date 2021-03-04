<?php

$query = require 'core/bootstrap.php';
require 'core/Users.php';

$users = $query->selectAll('users', 'Users');
 
require 'views/home.view.php'; 



