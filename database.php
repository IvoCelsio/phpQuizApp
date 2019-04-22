<?php 
// Create connection credentials
$db_host = 'YOUR_HOST';
$db_user = 'YOUR_USERNAME';
$db_password = 'YOUR_DB_PASSWORD';
$db_name = 'YOUR_DB_NAME';

// Create mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

// Error handler
if ($mysqli -> connect_error) {
  printf('Connect failed: %s\n', $mysqli -> connect_error);
  exit();
}
?>