<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class portfolio_model extends CI_Model
    {

        //tdk stands for title,description,keyword
        public function  getTDK()
        {
            $query = $this->db->select('*')
                ->from('settings')
                ->get()
                ->row_array();
            return $query;
        }

        public function getPage($id = null)
        {
                    $query = $this->db->select('*')
                        ->from('contents')
                        ->where('title',$id)
                        ->get()
                        ->row_array();
                    return $query;
                
                //removed if else below and added above more significant, dynamic code block.
                //we need a lil change after this, on sql file. contents->title->project change to contents->title->projects (just -s plural on project word)
                /*
                if($id == 'about')
                {
                    $query = $this->db->select('*')
                        ->from('contents')
                        ->where('title','about')
                        ->get()
                        ->row_array();
                    return $query;
                }
                
                elseif($id == 'projects')
                {
                    $query =$this->db->select('*')
                        ->from('contents')
                        ->where('title','project')
                        ->get()
                        ->row_array();
                    return $query;
                }
                elseif($id == 'contact')
                {
                    $query = $this->db->select('*')
                        ->from('contents')
                        ->where('title','contact')
                        ->get()
                        ->row_array();
                    return $query;
                }
                */

        }

        ####### admin panel-dashboard #######

        //get all contents
        public function contents()
        {
            $query =$this->db->select('*')
                ->from('contents')
                ->get()
                ->result_array();
            return $query;
        }

        //dashboard - content edit
        public function edit($id)
        {
            $query =$this->db->select('*')
                ->from('contents')
                ->where('id', $id)
                ->get()
                ->row_array();
            return $query;
        }
        //dashboard-update
        public function update($id, $content)
        {
            $query = $this->db->set('content', $content)
                             ->where('id', $id)
                             ->update('contents');
            return $query;
        }

        ####### settings #######

        //dashboard - setting edit
        public function editSetting()
        {
            $query = $this->db->select('*')
                ->from('settings')
                ->get()
                ->row_array();
            return $query;
        }

        //dashboard- setting update
        public function updateSetting($data)
        {
            $query = $this->db->set($data['settings'])
                              ->update('settings');
            return $query;
        }

        //get username and hashed password from db to login dashboard
        public function pass()
        {
            $query = $this->db->select('*')
                              ->from('settings')
                              ->get()
                              ->row_array();
            return $query;
        }
    }
