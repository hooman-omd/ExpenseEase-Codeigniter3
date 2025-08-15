<?php

class User_model extends CI_Model{
    private $userId = 1;
    public function getUser(){
        $user = $this->db->where('id',$this->userId)->from('users')->get();
        return $user->row();
    }

    public function updateUser(array $data){
        $this->db->update('users',$data,['id'=>$this->userId]);
    }
}