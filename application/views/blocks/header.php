<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $headRow['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="ROBOTS" CONTENT="noindex,nofollow">
    <meta name="author" content="<?php echo $headRow['author']; ?>" />
    <meta name="description" content="<?php echo $headRow['desc']; ?>" />
    <meta name="keywords"  content="<?php echo $headRow['keyw']; ?>" />
    <meta name="Resource-type" content="Document" />
    <?php
        foreach ($template['assets']['header'] as $headerAssets)
        {
            echo $headerAssets."\n";
        }
    ?>
</head>
<body>
<div class="container">






