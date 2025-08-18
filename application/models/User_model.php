<?php

class User_model extends CI_Model{
    private $userId;

    public function __construct()
    {
        parent::__construct();
        $this->userId = $this->session->userdata('auth');
    }

    public function getUser(){
        $user = $this->db->where('id',$this->userId)->from('users')->get();
        return $user->row();
    }

    public function addUser(array $data){
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $this->db->insert('users',$data);
        return $this->db->insert_id();
    }

    public function updateUser(array $data){
        $data['updated_at'] = date('Y-m-d H:i:s');
        $this->db->update('users',$data,['id'=>$this->userId]);
    }

    public function checkLogin(string $userName,string $password){
        $login = $this->db->select('id')
        ->where('name',$userName)
        ->where('password',$password)
        ->from('users')
        ->get()
        ->row();

        if ($login) {
            return ['status'=>true,'id'=>$login->id];
        }

        return ['status'=>false,'id'=>null];
    }
}