<?php
class MenuItems extends CI_Model {

    public function addItem($array){
        $this->db->insert('menu',$array);
        return $this->db->insert_id();
    }

    public function getItems(){
        $q = $this->db->select()
                ->from('menu')
                ->get();
        $query = $q->result();
        return $query;

    }
    public function addsubItem($array){
        $this->db->insert('submenu',$array);
        return $this->db->insert_id();
    }
    public function getsubItems($id){
            $qu = $this->db->select()
                ->from('submenu')
                ->where(['menu_id'=>$id])
                ->get();
            return $qu->result();
    }
}