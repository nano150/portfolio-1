<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends Public_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('portfolio_model');
        }
        public function index()
        {
            $this->loginControl();
            redirect(base_url('auth/login'));
        }

        public function loginControl()
        {
            $isLogin = $this->session->userdata('login');
            if ($isLogin) {
                redirect('admin');
            }
        }

        public function login()
        {
            $this->loginControl();

            if (($this->input->post() == false)) {
                $this->load->view('auth/login');
            } else {
                $user = $this->input->post('user');
                $passwd = $this->input->post('passwd');

                $row = $this->portfolio_model->pass();

                /*u can use any password hashing method to store pass in db, here, i suggest password_hashing with bcrpyt. */
                if ($user == $row['admin_name'] && password_verify($passwd, $row['admin_password'])) {
                    /* Valid attempt*/
                    $this->session->set_userdata('login',true);
                    redirect(base_url('admin'));
                } else {
                    /* Invalid attempt*/
                    redirect('auth/login');
                }

            }
        }

        public function logout()
        {
            $this->session->unset_userdata('login');
            redirect(base_url());
        }
    }



