<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Friend</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <script  type="text/css" src="<?php echo base_url() ?>https://bootswatch.com/4/solar/bootstrap.min.css"></script>
        <link href="<?php echo base_url() ?>assets/themes/custom/styles.css" rel="stylesheet"/>
         <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.3.1.slim.min.js"></script>
        <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet" />

    </head>
    <body class="container">
   <div class="card text-white bg-primary mb-3">
        <h1>Add Friend</h1>
         <?php 
            if(!empty($form_errors)){
            echo $form_errors;
            }  
        ?>
            <!-- create form -->
            <?php echo form_open($this->uri->uri_string());?>
            <!-- <div class="form-group">
                //<php echo form_open_multipart('upload/upload_file'); ?>
                <input type="file" name="userfile" size="20" />
                <br /><br />
                <input type="submit" value="upload" />
            </div> -->
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text"name="firstname">
                 <div class="col-md-6">
                   <?php echo form_error('firstname', '<div class="text-danger">', '</div>');?>
                </div>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number"name="age">
                <div class="col-md-6">
                    <?php echo form_error('age', '<div class="text-danger">', '</div>');?>
                </div>
            </div>
            <div class="form-group">
                <label for="hobby">Hobby</label>
                <input type="text" name="hobby">
                <div class="col-md-6">
                    <?php echo form_error('hobby', '<div class="text-danger">', '</div>');?>
                </div>
            </div>  
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="radio" name="gender"
                    value="male"/>Male
                <input type="radio" name="gender"
                    value="Female"/>Female
                <div class="col-md-6">
                    <?php echo form_error('gender', '<div class="text-danger">', '</div>');?>
                </div>
        </div>
    </div>
    <div>    
            <input class="btn btn-primary" type="submit" value="Welcome friend"></input>
    </div>
            <?php echo form_close()?>
    <div class="modal-footer">
      <?php echo anchor('friends','Cancel',['class'=>'btn btn-primary']);?>
        </div>
    </body>
</html>