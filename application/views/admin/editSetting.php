<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit settings</title>
    <META NAME="ROBOTS" CONTENT="noindex,nofollow">
    <link rel="stylesheet" href="http://localhost/public/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://localhost/public/assets/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="http://localhost/public/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://localhost/public/assets/css/style.css" />
</head>
<body>


<style>

    .form-signin {
        max-width: 500px;
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

    fieldset {
        padding: 10px;
    }


</style>
<body>
<div>
    <div>
        <form action="<?php echo base_url('admin/updateSetting'); ?>" method="post" class="form-signin">


            <fieldset>
                <div>title</div>
                <div style = "clear: both"></div>
                <input type="text" name="title" value="<?php echo $edit['title'];?>" class="form-control"/>
            </fieldset>
            <fieldset>
                <div>author</div>
                <div style = "clear: both"></div>
                <input type="text" name="author" value="<?php echo $edit['author'];?>" class="form-control"/>
            </fieldset>
            <fieldset>
                <div>description</div>
                <div style = "clear: both"></div>
                <input type="text" name="desc" value="<?php echo $edit['desc'];?>" class="form-control"/>
            </fieldset>
            <fieldset>
                <div>keywords</div>
                <div style = "clear: both"></div>
                <input type="text" name="keyw" value="<?php echo $edit['keyw'];?>" class="form-control"/>
            </fieldset>
            <fieldset>
                <div>login name</div>
                <div style = "clear: both"></div>
                <input type="text" name="user" value="<?php echo $edit['admin_name'];?>" class="form-control"/>
            </fieldset>
            <fieldset>
                <div>login password</div><span style="color: gray; font-size: 11px">if blank, don't change stored password</span>
                <div style = "clear: both"></div>
                <input type="text" name="passwd" value="" placeholder="new password" class="form-control"/>
            </fieldset>

            <div class="text-center">
                <input type="submit" class="btn btn-default form-control" value="update"/>
            </div>
        </form>
    </div>






    <div class="container">
        <form action="" method="post">

        </form>

    <?php echo (isset($update) ? $this->view('admin/updateMessage') : null); ?>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://localhost/public/assets/js/bootstrap.js"></script>
</body>
</html>



