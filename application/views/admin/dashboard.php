<div class="well-lg">
    <div class="pull-left">
        <ul class="list-inline">
            <li>edit pages:</li>
            <?php foreach ($contents as $content) { ?>
                <li><a href="<?php echo base_url('admin/edit'); ?>/<?php echo $content['id']; ?>"><?php echo $content['title'];?></a></li>
            <?php } ?>
        </ul>
        <ul class="list-inline">
            <li>edit settings:</li>
            <li><a href="<?php echo base_url('admin/editSetting'); ?>">title, author, description, keyword, login name and password </a></li>
        </ul>

    </div>
    <div class="pull-right">
        <ul class="list-inline">
            <li><a href="<?php echo base_url(); ?>">site</a></li>
            <li><a href="<?php echo base_url('auth/logout'); ?>">log out</a></li>
        </ul>
    </div>
    <div style="clear: both;"></div>
</div>



