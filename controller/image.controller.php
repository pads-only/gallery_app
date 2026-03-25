<?php
require "config/Database.php";

$config = require("config/db_config.php");

$connection = new Database($config['database']);
$image = $connection->query("SELECT * FROM images WHERE id=1")->fetch();


$formatedDate = formatDate($image['created_at']);

require "views/image.view.php";
