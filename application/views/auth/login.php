<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <META NAME="ROBOTS" CONTENT="noindex,nofollow">
    <link rel="stylesheet" href="http://localhost/public/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://localhost/public/assets/css/bootstrap-theme.css" />
</head>
<style>
    body {
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 10px 0px;
        font-size: 16px;
    }
</style>
<body>
<div>
    <div>
        <form action="<?php echo base_url('auth/login');?>" method="post" class="form-signin">
            <input type="text" class="form-control" name="user"/>
            <input type="password" class="form-control" name="passwd"/>
            <div class="text-center">
                <input type="submit" class="btn btn-default form-control" value="submit"/>
            </div>
        </form>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js">
    </script><script src="http://localhost/public/assets/js/bootstrap.js">
</body>
</html>
