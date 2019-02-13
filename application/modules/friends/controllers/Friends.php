<?php
Class Friends extends MX_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model("friends_model");
        $this->load->model("site/site_model");
    }

    // public function index()
    // {
        
         
    //         $v_data["all_friends"]=$this->friends_model->get_friends();
    
    //         $data = array("title" =>$this->site_model->display_page_title(),
    //         "content" =>$this->load->view("friends/all_friends", $v_data, TRUE)
        
    //     );
    //         $this->load->view("site/layouts/layout",$data);
    // }
    public function index($start = NULL)
        {
            $config["base_url"] = base_url() . "friends/friends/index";
            $config["total_rows"] = $this->friends_model->countAll();
            $config["per_page"] = 4;
            
            $v_data["all_friends"] = $this->friends_model->get_friends($config["per_page"], $start);
            
            $this->pagination->initialize($config);
            
            $v_data['links'] = $this->pagination->create_links();
            $v_data['counter'] = $start;
            
            $data = array(
                "title" => $this->site_model->display_page_title(),
                "content" => $this->load->view("all_friends", $v_data, TRUE)
            );
            
            $this->load->view("site/layouts/layout", $data);
        }
    public function welcome($friend_id)
         {
            $my_friend=$this->friends_model->get_single_friend($friend_id);
            if($my_friend->num_rows() > 0)
                {
                      //  $age, $gender, $hobby
                $row = $my_friend->row();
                $firstname= $row->friend_name;
                $age= $row->friend_age;
                $gender= $row->friend_gender;
                $hobby= $row->friend_hobby;
             $data=array(
                        'friend_name'=>$firstname,
                        'friend_age'=>$age,
                        'friend_gender'=>$gender,
                        'friend_hobby'=>$hobby,
                        
                    ); 
                     $this->load->view('welcome_here', $data);
                      
                    }
                    else{
                        $this->session->set_flashdata("error_message, could not find your friend");
                        redirect("friends");
                    }
            //  pass the date
    }
    public function new_friend()
         {
             $this->form_validation->set_rules("firstname", "First Name","required");
             $this->form_validation->set_rules("age","Age","required|numeric");$this->form_validation->set_rules("gender", "Gender","required");$this->form_validation->set_rules("hobby", "Hobby", "required");
            //  validate
            $form_errors="";
             if($this->form_validation->run())
             {
                 $friend_id = $this->friends_model->add_friend();
                 if($friend_id > 0)
                 {
                     $this->session->flashdata("success_message", "New Friend ID".$friend_id."has been added");
                    
                     redirect("friends");
                 }
             else{
                 $this->session->flashdata("error_message", "Unable to add  friend");
             }
    
            }
            $data["form_errors"]= validation_errors();
            $this->load->view("add_friend", $data);
        }
    public function new_enemy()
         {
             $this->form_validation->set_rules("firstname", "First Name","required");
             $this->form_validation->set_rules("age","Age","required|numeric");$this->form_validation->set_rules("gender", "Gender","required");$this->form_validation->set_rules("hobby", "Hobby", "required");
            if($this->form_validation->run())
            {
                 $enemy_id = $this->enemy->add_enemy();
            if($enemy_id > 0)
            {
                $this->session->flashdata("success_message", "New Enemy ID".$enemy_id."has been added");
            }
            else{
                 $this->session->flashdata("error_message", "Unable to add  enemy");
             }
        }
         $data["form_errors"]= validation_errors();
        $this->load->view("add_enemy", $data); 
    }
    // public function edit_friend($friend_id){
		
	// 	$friend=$this->Friends_model->get_single_friend($friend_id);
    //     $this->load->view('edit_friend', ['friend'=>$friend]);
        
    public function edit_friend($friend_id)
         {
            $friend=$this->friends_model->get_single_friend($friend_id);
            if($friend->num_rows() > 0)
                {
                      //  $age, $gender, $hobby
                $row = $friend->row();
                $firstname= $row->friend_name;
                $age= $row->friend_age;
                $gender= $row->friend_gender;
                $hobby= $row->friend_hobby;
             $data=array(
                        'friend_name'=>$firstname,
                        'friend_age'=>$age,
                        'friend_gender'=>$gender,
                        'friend_hobby'=>$hobby,
                    );
                    $this->load->view('edit_friend', $data);
                    }
                    
    
	}
}
?>
