<?php 
class Friends_model extends CI_Model{
    public function add_friend(){
        // create an array of The data to save
        $data = array(
        "friend_name"=>$this->input->post("firstname"),
        "friend_age"=>$this->input->post("age"),
        "friend_gender"=>$this->input->post("gender"),
        "friend_hobby"=>$this->input->post("hobby"),
        );

        if($this->db->insert("friend", $data))
        {
            return $this->db->insert_id();
        }
        else{
            return FALSE;
        }
    }
    public function get_friends($limit, $start)
        {
            $this->db->limit($limit, $start);
            $this->db->order_by("created", "DESC");
            return $this->db->get("friend");
        }
        function get_single_friend($friend_id){
               $this->db->where("friend_id", $friend_id);
               return $this->db->get("friend");
        }
        public function countAll()
        {
            return $this->db->get("friend")->num_rows();
        }
    }
?>