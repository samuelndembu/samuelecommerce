<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="stylesheet" type="text/css" href="<?php echo base_url();?>assets/themes/custom/styles.css"></script>
    </head>
    <body>   
        <div class="container">
        <h1>Add Enemy</h1>
            <?php echo form_open($this->uri->uri_string());?>
            <div>
                <label for="first_name">First Name</label>
                <input type="text"name="firstname">
            </div>
            <div>
                <label for="age">Age</label>
                <input type="number"name="age">
            </div>
            <div>
                <label for="hobby">Hobby</label>
                <input type="text" name="hobby">
            </div>
            <div>
                <label for="gender">Gender</label>
                <input type="radio" name="gender"
                    value="male"/>Male
                <input type="radio" name="gender"
                    value="Female"/>Female
            </div>
            <div>    
                <input class="submit_button" type="submit" value="Leave Enemy"></input>
             </div>
            <?php echo form_close()?>
        </div>
    </body>
</html>