<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <style>
    .error{
        color: red;
    }
      .success{
        color: green;
    }
    
</style>
</head>
<body>    
    
    <?php  echo form_open("tracker/log_auth", array(
    "method" => "post",
    "enctype" => "multipart/form-data")); ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text"  class="form-control" name="username_txt" placeholder="Enter username" value="<?php echo set_value('username_txt') ?>">
        <?php  echo form_error("username_txt","<div class='error'>","</div>"); ?>
      

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control"  name="password_txt" id="exampleInputPassword1" placeholder="Enter password" value="<?php echo set_value('password_txt') ?>">
        <?php  echo form_error("password_txt","<div class='error'>","</div>"); ?>
    </div>
        <?php if($this->session->flashdata("wrong")) { 
    ?>
    <div class="error">
        <?php echo $this->session->flashdata("wrong") ?>
    </div>
    <?php 
    }
    ?>

     <?php if($this->session->flashdata("registered")) { 
    ?>
    <div class="success">
        <?php echo $this->session->flashdata("registered") ?>
    </div>
    <?php 
    }
    ?>

    <button type="submit" class="btn btn-primary">Submit</button>
   <?php echo form_close(); ?>
   <div>
       <span>No account yet?</span>
    <a href= "<?php echo site_url("tracker/register") ?>" > Register here </a>

   </div>


</body>
</html>