<div class="well-lg">
    <ul class="pull-left list-inline">
        <li><?php echo (isset($dashLink) ? '<li><a href="'.$dashLink.'">dashboard</a></li>' : null); ?></li>
    </ul>
    <ul class="pull-right list-inline">
        <li><a href="<?php echo base_url('about')?>">about</a></li>
        <li><a href="<?php echo base_url('projects') //controlling portfolio/index/projects actually. just shortened for clean view ?>">projects</a></li>
        <li><a href="<?php echo base_url('contact')?>">contact</a></li>

    </ul>
</div>
<hr/>
<br/>
