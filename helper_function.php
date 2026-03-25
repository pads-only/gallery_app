<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function trimInput($input)
{
    return trim($_POST[$input] ?? '');
}

function finfo($tmp_name)
{
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    return $finfo->file($tmp_name);
}

function formatDate($date)
{
    $createDate = date_create($date);
    return date_format($createDate, "M. j, Y") ?? '';
}

function handleFiles($target_dir, $tmp_name, $target_file)
{
    $mime_type = finfo($tmp_name);

    if (!$mime_type === 'image/jpeg' or !$mime_type === 'image/png' or !$mime_type === 'image/gif') {
        echo "not good";
        die();
    }

    if (!move_uploaded_file($tmp_name, $target_dir . $target_file)) {
        echo "something went wrong";
        die();
    }
}
