<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My enemys</title>
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
        <h1>My enemys</h1>
        <?php echo anchor("hello", "Add enemy");?>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
            <?php if($all_enemys->num_rows() >0){
                $count=0;
                foreach($all_enemys->result() as $row)
                {
                    $count++;
                    $id=$row->enemy_id;
                    $name=$row->enemy_name;
                    $age=$row->enemy_age;
                    $gender=$row->enemy_gender;
?>
                    <tr>
                        <td> <?php echo $count?></td>
              
                        <td> <?php echo $name?></td>
                    
                   
                        <td> <?php echo $age?></td>
                   
                        <td> <?php echo $gender?></td>
                        <td><?php echo anchor("hello/welcome/".$id,"View");?></td>
                    </tr>
                <?php
                }
            }
            ?>
    </body>
</html>