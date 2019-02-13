<?php 
    class Enemy_Model extends MX_model{
        public function add_enemy(){
            $data = array(
                "enemy_name"=>$this->input->post("$first_name"),
                "enemy_age"=>$this->input->post("$age"),
                "enemy_gender"=>$this->input->post("$gender"),
                "enemy_hobby"=>$this->input->post("$hobby"),
            );
            if($this->db->insert("enemy", $data))
            {
                return $this->db->insert();
            }
            else{
                return FALSE;
            }
            
        }
        public function get_enemies(){
            $this->db->order_by("enemy_id", "ASC");
            return $this->db->get("enemy");
        }
    }
?>