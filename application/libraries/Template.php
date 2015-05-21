<?php defined('BASEPATH') OR exit('No direct script access allowed');

    //a basic templating. it was not very necessary in this basic personal portfolio project actually. but open to improve anyway.
    class template
    {
        public $assets;
        public $layout;

        public  function __construct()
        {
            $this->ci =& get_instance();
        }

        //for example, header can be  a $group name, and $asset is links, such as css,js..
        public function set_asset($group, $asset)
        {
            $this->assets[$group][] = $asset; //assigning blank array to $asset links
        }
        public function get_asset($group)
        {
            return $this->assets[$group];
        }
        public function set_layout($layout)
        {
            $this->layout = $layout;
        }
        public function get_layout()
        {
            return $this->layout;
        }

        //render, for publishing page.
        public function render($page,$data = array())
        {
            //specify admin folder for admin dashboard panel
            if ($page == 'dashboard') {
            $data['template']['body'] = 'admin/'.$page;
            } else {
            $data['template']['body'] = 'pages/'.$page;
            }

            $data['template']['assets'] = $this->assets; //assigning all asset groups to $data['template']['assets']

            $this->ci->load->view('layouts/'.$this->layout, $data);
        }
    }


