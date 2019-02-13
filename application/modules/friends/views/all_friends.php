<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Friends</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   

    <link href="<?php echo base_url() ?>/assets/themes/custom/scripts.js" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/themes/custom/styles.css" rel="stylesheet" />
     
</head>

<body>
    <div class="container">
        <?php $success= $this->session->flashdata("success_message");
        $error= $this->session->flashdata("error_message");
if(!empty($success)){
    echo $success;
}else{
    echo $error;
}

?>
      
        <h1>My Friends</h1>
        
        <?php echo anchor("friends/new_friend", "Add friend",['class'=>'btn btn-primary']);?>
        <?php echo anchor("friends/enemy", "View Enemies",['class'=>'btn btn-secondary']);?>
        <table class="table table-striped table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
            <?php if($all_friends->num_rows() >0){
                $count=0;
                foreach($all_friends->result() as $row)
                {
                    $count++;
                    $id=$row->friend_id;
                    $name=$row->friend_name;
                    $age=$row->friend_age;
                    $gender=$row->friend_gender;
            
?>
            <tr>
                <td> <?php echo $count?></td>

                <td> <?php echo $name?></td>


                <td> <?php echo $age?></td>

                <td class="col-2"> <?php echo $gender?></td>
                <td class="col-2"> <?php echo anchor("friends/friends/welcome/".$id,"View",['class'=>'btn btn-primary']);?></td>
                <td class="col-2"> <?php echo anchor("friends/friends/edit_friend/".$id,"Edit",['class'=>'btn btn-primary']);?></td>
                <td class="col-2"> <?php echo anchor("friends/friends/welcome/".$id,"Delete",['class'=>'btn btn-danger']);?></td>
                <td class="col-2"> <?php echo anchor("friends/friends/welcome/".$id,"View",['class'=>'btn btn-primary']);?></td>
            </tr>
            <><script>
            $document.ready(function)(){
                $('.btn btn-danger').click(function(){
                    var id = $(this).attr("$friend_id");
                    if(confirm("Are you sure you want to delete?")){
                        window.location="<?php  echo base_url();?> friends/btn btn-danger/" + id;
                    }
            </script>
            
            <?php
                }
            }
            ?>
        <p><?php echo $links; ?></p>
