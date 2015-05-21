
<?php $this->load->view('admin/blocks/header');//no need dynamic meta tags or title at dashboard, so loading a new header at admin/blocks ?>

<?php $this->load->view($template['body']); ?>

<?php $this->load->view('blocks/footer'); ?>

