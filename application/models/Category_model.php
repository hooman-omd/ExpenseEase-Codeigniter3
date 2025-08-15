<?php

class Category_model extends CI_Model{
    private $userId = 1;

    public function getCategories(){
        $user = $this->db->where('user_id',$this->userId)->from('categories')->get();
        return $user->result();
    }

    public function insertCategory(string $title){
        $data = [
            'user_id' => $this->userId,
            'title' => $title,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('categories',$data);
    }

    public function updateCategory(int $id,string $title){
        $data = [
            'title' => $title,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->update('categories',$data,['id'=>$id]);
    }

    public function deleteCategory(int $id){
        $this->db->delete('categories',['id'=>$id]);
    }
}