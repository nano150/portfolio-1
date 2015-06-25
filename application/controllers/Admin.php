<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends Admin_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->load->model('portfolio_model');
            $this->template->set_layout('lyAdmin');
            $this->template->set_asset('adminHeader', '<link rel="stylesheet" href="'.base_url().'public/assets/css/bootstrap.min.css" />');
            $this->template->set_asset('adminHeader', '<link rel="stylesheet" href="'.base_url().'public/assets/css/bootstrap-theme.css" />');
            $this->template->set_asset('adminHeader', '<link rel="stylesheet" href="'.base_url().'public/assets/css/font-awesome.min.css" />');
            $this->template->set_asset('adminHeader', '<link rel="stylesheet" href="'.base_url().'public/assets/css/style.css" />');
            $this->template->set_asset('footer', '<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>');
            $this->template->set_asset('footer', '<script src="'.base_url().'public/assets/js/bootstrap.js"></script>');
            $this->template->set_asset('footer', '<script src="'.base_url().'public/assets/ckeditor/ckeditor.js"></script>');
            $this->template->set_asset('footer', '<script src="'.base_url().'public/assets/ckeditor/adapters/jquery.js"></script>');
            $this->template->set_asset('footer', '<script>$("textarea").ckeditor();</script>');
            
            
            $data['contents'] = $this->portfolio_model->contents();
            $this->template->render('dashboard',$data); //publish a page named dashboard, look library/template for more..
            
        }

        public function index()
        {
            //no need
        }

        public function edit($id = null)
        {
            if($id != null)
            {
                $data['edit'] = $this->portfolio_model->edit($id);
                $this->load->view('admin/edit',$data);
            }
            else
            {
                redirect('admin');
            }
        }
        public function update($id = null)
        {
            $update = null;
            if(isset($id) && !empty($id))
            {
                $content = $this->input->post('content');
                $update = $this->portfolio_model->update($id, $content);
            }
            if ($update)
            {
                $data['update'] = "update succesful";
            }
            else
            {
                $data['update'] = "update failed";
            }

            $data['id'] = $id;
            $data['dashLink'] = base_url('admin');
            $this->load->view('admin/updateMessage',$data);
        }

        public function editSetting()
        {
            $data['edit'] = $this->portfolio_model->editSetting();
            $this->load->view('admin/editSetting',$data);
        }
        public function updateSetting()
        {
            $data['settings'] = array('title'        => $this->input->post('title'),
                                    'author'         => $this->input->post('author'),
                                    'desc'           => $this->input->post('desc'),
                                    'keyw'           => $this->input->post('keyw'),
                                    'admin_name'     => $this->input->post('user'),
                                    'admin_password' => $this->input->post('passwd'));

            //if a new password given hash it. else, dont do anything stored pass in db
            if($data['settings']['admin_password'] == true)
            {
                //overriding 'admin_password' with hashing
                $data['settings']['admin_password'] = password_hash($data['settings']['admin_password'], PASSWORD_BCRYPT);
            }
            else
            {
                //unset from array, if it's null.(if user dont post new pass)
                unset($data['settings']['admin_password']);
            }
            //sending $data['settings'] to model
            $update = $this->portfolio_model->updateSetting($data);

            //if update successfully
            if ($update)
            {
                $data['update'] = "updating settings succesful";
            }
            else
            {
                $data['update'] = "updating settings failed";
            }

            $data['dashLink'] = base_url('admin');
            $this->load->view('admin/updateMessage',$data);


        }

    }


