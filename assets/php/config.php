<?php
const TITLE = 'SMK Negeri 9 LoFI';

$_SESSION['loged_in'] = isset($_SESSION['loged_in']) ? true : false;
$config = array(
  'host' => 'localhost',
  'username' => 'root',
  'password' => 'myxampp',
  'database' => 'lofi'
);

$sql = new PDO(
  "mysql:host={$config['host']}; dbname={$config['database']}",
  $config['username'],
  $config['password']
);

$rows = [];
$name_regex = '^[A-Za-z0-9_\-]+$';

function valid_username($name) {
  global $name_regex;
  return (
    strlen($name) > 0 &&
    strlen($name) <= 15 &&
    preg_match("/$name_regex/", $name) === 1
  );
}
?>