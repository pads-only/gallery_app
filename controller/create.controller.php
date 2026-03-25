<?php
require "config/Database.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $title = trimInput('title');
    $owner = trimInput('owner');
    $description = trimInput('description');

    //validation
    if (strlen($title) === 0 || strlen($owner) === 0 || strlen($description) === 0 || $_FILES['file-upload']['error'] === UPLOAD_ERR_NO_FILE) {
        echo "All fields are required!";
        exit;
    }

    if ($_FILES['file-upload']['size'] > 1000000) {
        echo "file is too big" . $_FILES['file-upload']['size'];
        exit;
    }

    $target_dir = 'uploads/';
    $temp_name = $_FILES['file-upload']['tmp_name'];
    $target_file = basename($_FILES['file-upload']['name']);

    handleFiles($target_dir, $temp_name, $target_file);

    $config = require("config/db_config.php");
    $connection = new Database($config['database']);

    $connection->query("INSERT INTO images (title, owner, description, image_path) VALUES (?,?,?,?)", [$title, $owner, $description, $target_dir . $target_file]);

    header("location: /books/gallery_project/");
    exit;
}


require "views/create.view.php";
