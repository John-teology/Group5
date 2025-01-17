<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|Register</title>
   
    
    <?php if($theme == ""){
        $theme = 'light';
    }
    ?>
    <link rel="stylesheet"type="text/css"href="<?php printf(base_url('assets/%s/css/login/login.css'),$theme);?>">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>
<body>    
<style>
    p{
        text-align: center;
    }
</style>
<?php  echo form_open("tracker/login_auth", array(
    "method" => "post",
    "enctype" => "multipart/form-data")); ?>


    <div class="topnav">
        
            <a id="glow" class="active" href="#home"><h2 id="htext">Establishment Traffic Control System</h2></a>
       
        
        <div class="login-container">
            <form action="/action_page.php">
                <div class="input-icons">
                <i id="icon" class="fa fa-user"></i> 
                <input id="input" type="text"  class="form-control" name="username_txt" placeholder="Enter username" value="<?php echo set_value('username_txt') ?>" autofocus>
               
                <i id="icon" class="fa fa-lock"></i>
                <input id="input" type="password" class="form-control"  name="password_txt" id="exampleInputPassword1" placeholder="Enter password" value="<?php echo set_value('password_txt') ?>">
              
            
            <button type="submit">Login</button>
              <?php if($this->session->flashdata("wrong")) { 
            ?>
            <div class="error">
                <?php echo $this->session->flashdata("wrong") ?>
            </div>
            <?php 
            }
            ?>
            <div id="error_holder">
            <?php  echo form_error("username_txt","<span class='error'>","</span>"); ?>
            <?php  echo form_error("password_txt","<span class='error'>","</span>"); ?>
            </div>
             
            <?php if($this->session->flashdata("registered")) { 
            ?>
            <div class="success">   
                <?php echo $this->session->flashdata("registered") ?>
                
            </div>
            <?php 
            }
            ?>
            
            <?php echo form_close(); ?>
            </div>
            </form>
        </div>
    </div>


<div class="wrapper1">
        <div class="container">
        <img class="image" src="<?php echo base_url('assets/images/arch.gif');?>" alt="">
        <div class="overlay">
            <div class="text">
                <p>Establishment Traffic Control System tracks the movement or flow of</p>
                <p>people entering an establishment for traffic control as well as </p>
                <p>contact tracing.</p>
            </div>
        </div>
        </div>

        <?php  echo form_open("tracker/register_auth", array(
    "method" => "post",
    "enctype" => "multipart/form-data")); ?>
    <div class="wrapper">
            <div class="logo">
                <h3 class="title">Create an Account</h3>
            </div>
        <div class="form">
            <div id="div2" class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <i class="fa fa-user"></i>
                <input id="in" type="text" class="form-control" value="<?php echo set_value("username_txt") ?>" name="username_txt" placeholder="Enter username">
                <?php  echo form_error("username_txt","<div class='error'>","</div>"); ?>

            </div>
            <div id="div2" class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <i class="fa fa-lock"></i>
                <input type="password" class="form-control" value="<?php echo set_value("password1_txt") ?>" name="password1_txt" id="exampleInputPassword1" placeholder="Enter password">
                <?php  echo form_error("password1_txt","<div class='error'>","</div>"); ?>
            </div>
            <div id="div2" class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <i class="fa fa-lock"></i>
                <input type="password" class="form-control" name="password2_txt" value="<?php echo set_value("password2_txt") ?>" id="exampleInputPassword1" placeholder="Confirm your password">
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
                

            </div>
        </div>
    </div>

</div>


    
</body>
</html> 