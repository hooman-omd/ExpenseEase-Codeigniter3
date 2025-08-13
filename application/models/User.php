<?php

class User extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll(){
        //$query = $this->db->query("select * from user");
        $query = $this->db->get('users');
        return $query->result();
    }

    public function find(int $id){
        $query = $this->db->where('id',$id)->get('users');
        return $query->result();
    }
}