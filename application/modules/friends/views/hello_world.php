<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Friends</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/themes/custom/styles.css">
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
        <?php echo anchor("friends/new_friend", "Add friend");?>
        <?php echo anchor("friends/enemy", "Enemies");?>
        <table>
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
                   
                        <td> <?php echo $gender?></td>
                        <td><?php echo anchor("friends/friends/welcome/".$id,"View");?></td>
                    </tr>
                <?php
                }
            }
            ?>
    </body>
</html>