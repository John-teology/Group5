<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract Tracing Form</title>
      <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    /> -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/contact_tracing/contact_t_form.css'); ?>">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    
    <?php  echo form_open("tracker/contact_tracing_auth", array(
        "method" => "post",
        "enctype" => "multipart/form-data")); ?>

    <div class="wrapper">

                    <div class="logo">  
                        
                        <h3 class="title">Contact Tracing Form</h3>
                    </div>
        <div class="form">         

            <div class="div1">
                <label for="exampleInputPassword1" class="form-label">First Name</label>
                <!-- <i class="fa fa-user"></i>  -->
                <input type="text" class="form-control"  name="firstname_txt"  placeholder="Enter your First Name" value="<?php echo set_value('firstname_txt') ?>" >
                <?php  echo form_error("firstname_txt","<div class='error'>","</div>"); ?>
            </div>

            <div class="div1">
                <label for="exampleInputPassword1" class="form-label"> Last Name</label>
                <input type="text" class="form-control"  name="lastname_txt"  placeholder="Enter your Last Name" value="<?php echo set_value('lastname_txt') ?>" >
                <?php  echo form_error("lastname_txt","<div class='error'>","</div>"); ?>
            </div>

            <div class="div1">
                <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                <input type="number" class="form-control"  name="phone_txt"  placeholder="Enter your Phone Number" value="<?php echo set_value('phone_txt') ?>" >
                <?php  echo form_error("phone_txt","<div class='error'>","</div>"); ?>
            </div>

            <div class="div1">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="number" class="form-control"  name="age_txt"  placeholder="Enter your Age" value="<?php echo set_value('age_txt') ?>" >
                <?php  echo form_error("age_txt","<div class='error'>","</div>"); ?>
            </div>

            <div class="div1">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control"  name="email_txt"  placeholder="Enter your Email" value="<?php echo set_value('email_txt') ?>">
                <?php  echo form_error("email_txt","<div class='error'>","</div>"); ?>
            </div>

            <div class="div1">
                <button id="but2" type="submit" class="btn btn-primary">Submit</button>
                <?php echo form_close(); ?>
            </div>

        </div> 
    </div>

   
        <a href="<?php echo site_url("tracker")?>"><button class="but1">back to homepage</button></a>
 

    
</body>
</html>