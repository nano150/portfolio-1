<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit content</title>
    <META NAME="ROBOTS" CONTENT="noindex,nofollow">
    <link rel="stylesheet" href="http://localhost/public/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://localhost/public/assets/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="http://localhost/public/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://localhost/public/assets/css/style.css" />
</head>
<body>
<div class="container">
    <form action="<?php echo base_url('admin/update'); ?>/<?php echo $edit['id'];?>" method="post">
        <textarea rows="10" cols="30" name="content" class="form-control"><?php echo $edit['content']; ?></textarea>
        <input type="submit" class="form-control" value="update"/>
    </form>

    <?php echo (isset($update) ? $this->view('admin/updateMessage') : null); ?>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://localhost/public/assets/js/bootstrap.js"></script>
    <script src="http://localhost/public/assets/ckeditor/ckeditor.js"></script>
    <script src="http://localhost/public/assets/ckeditor/adapters/jquery.js"></script>
    <script>$("textarea").ckeditor();</script>
</body>
</html>



