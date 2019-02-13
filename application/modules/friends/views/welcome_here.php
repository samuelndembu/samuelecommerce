<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Welcome</title>
 <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.3.1.slim.min.js"></script>
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />


    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet" />

    <link href="<?php echo base_url() ?>/assets/themes/custom/scripts.js" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/themes/custom/styles.css" rel="stylesheet" />
     <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.3.1.slim.min.js"></script>
 
</head>
<body class="container">
<div class="card text-white bg-primary mb-3">
<?php
$validation_errors = validation_errors();
if(!empty($validation_errors)){
echo $validation_errors;
}
?>

<h1 class="text-center">Welcome <?php echo $friend_name; ?></h1>
<ol class="list-inline mx-auto justify-content-center">
<li>Age:<?php echo $friend_age; ?></li>
 
<li>Gender:<?php echo $friend_gender; ?></li>
 
<li>Hobby:<?php echo $friend_hobby; ?></li>
</ol>
 
</div>
 <?php echo anchor('friends','back',['class'=>'btn btn-primary']);?>
</body>
</html>