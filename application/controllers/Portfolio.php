<?php defined('BASEPATH') OR exit('No direct script access allowed');

class portfolio extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();

        $this->load->model('portfolio_model');

        $this->template->set_layout('lyPublic');
        $this->template->set_asset('header', '<link rel="stylesheet" href="'.base_url().'public/assets/css/bootstrap.min.css" />');
        $this->template->set_asset('header', '<link rel="stylesheet" href="'.base_url().'public/assets/css/bootstrap-theme.css" />');
        $this->template->set_asset('header', '<link rel="stylesheet" href="'.base_url().'public/assets/css/font-awesome.min.css" />');
        $this->template->set_asset('header', '<link rel="stylesheet" href="'.base_url().'public/assets/css/style.css" />');
        $this->template->set_asset('footer', '<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>');
        $this->template->set_asset('footer', '<script src="'.base_url().'public/assets/js/bootstrap.js"></script>');
    }
	public function index($page = null)
	{

        if($page) {
            $this->page($page);
        } else {
            $this->page('about');
        }
    }

    public function page($id)
    {
        if($this->session->userdata('login') == true)
        {
            $data['dashLink'] = base_url('admin');
        }
        $data['headRow'] = $this->portfolio_model->getTDK();
        $data['row'] = $this->portfolio_model->getPage($id);
        $this->template->render('main',$data);
    }

}

