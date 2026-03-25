<?php
require "config/Database.php";

$config = require("config/db_config.php");

$connection = new Database($config['database']);
$images = $connection->query("SELECT * FROM images ORDER BY id DESC")->fetchAll();

require "views/images.view.php";
