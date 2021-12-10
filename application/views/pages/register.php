<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    /> -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/register.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo base_url('assets/js/register.js'); ?>"></script>
 
</head>
<body>    
    
    <?php  echo form_open("tracker/reg_auth", array(
    "method" => "post",
    "enctype" => "multipart/form-data")); ?>
    <div class="wrapper">
            <div class="logo">
                <h3 class="title">Create an Account</h3>
            </div>
        <div class="form">
            <div class="div2" >
                <label for="exampleInputEmail1" class="form-label">Username:</label>
                <i class="fa fa-user"></i>
                <input type="text" class="form-control" value="<?php echo set_value("username_txt") ?>" name="username_txt" placeholder="Enter username">
                <?php  echo form_error("username_txt","<div class='error'>","</div>"); ?>

            </div>
            <div class="div2">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <i class="fa fa-lock"></i>
                <input type="password" class="form-control" value="<?php echo set_value("password1_txt") ?>" name="password1_txt" id="exampleInputPassword1" placeholder="Enter password">
                <?php  echo form_error("password1_txt","<div class='error'>","</div>"); ?>
            </div>
            <div class="div2">
                <label for="exampleInputPassword1" class="form-label">Confirm Password:</label>
                <i class="fa fa-lock"></i>
                <input type="password" class="form-control" name="password2_txt" value="<?php echo set_value("password2_txt") ?>" id="exampleInputPassword" placeholder="Confirm your password">
                <?php  echo form_error("password2_txt","<div class='error'>","</div>"); ?>
            </div>
            <?php if($this->session->flashdata("not_equal")) { 
            ?>
            <div class="error">
                <?php echo $this->session->flashdata("not_equal") ?>
            </div>
            <?php 
            }
            ?>

            <button id="signup" type="submit" class="btn btn-primary">Sign Up</button>
            <?php echo form_close(); ?>
            <div class="login_here">
                <!-- <span>Already have an account?</span> -->
                <a href= "<?php echo site_url("tracker/login") ?>" > Login here </a>

            </div>
        </div>
    </div>
</body>
</html>