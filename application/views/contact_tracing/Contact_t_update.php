<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Tracing Update</title>
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
      <?php if($theme == ""){
            $theme = 'light';
        }
        ?>
    <link rel="stylesheet"type="text/css"href="<?php printf(base_url('assets/%s/css/contact_tracing/contact_t_update.css'),$theme);?>">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <style>
        body{
            /* background-color: #1a1f22; */
        }
        .btn{
            background-color: #00994d;
            border-color: #00994d;
            border-radius: 10px;
            border-width: 0px;
            font-weight: bold;
        }
        .btn:hover {
        background-color: #4db882;
        }
        .header-title:hover {
            text-decoration: none;
        }
    </style>

</head>
<body class="bodyy">

    
        <div id="header" class="navbar">
            <div class="container">
                <a class="header-title" href="<?php echo site_url("tracker")?>" class="navbar-brand"><strong>Establishment Traffic Control System</strong></a>
            </div> 
        </div>
        
    
    <?php  echo form_open("tracker/contact_tracing_update_auth/$data->id", array(
        "method" => "post",
        "enctype" => "multipart/form-data")); ?>
    <div class="wrapper">

<div class="logo">  
    
    <h4 class="title"> Update Contact Tracing Form</h4>
</div>
    <div class="form">  
        <div class="div1">
        <div class="wrapper">
            <label for="exampleInputPassword1" class="form-label">First Name</label>
            <input type="text" class="form-control"  name="firstname_txt"  placeholder="Enter your First Name" value="<?php print_r($data->first_name)?>" autofocus >
            <?php  echo form_error("firstname_txt","<div class='error'>","</div>"); ?>

            <label for="exampleInputPassword1" class="form-label"> Last Name</label>
            <input type="text" class="form-control"  name="lastname_txt"  placeholder="Enter your Last Name" value="<?php print_r($data->last_name) ?>" >
            <?php  echo form_error("lastname_txt","<div class='error'>","</div>"); ?>

            
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input type="number" class="form-control"  name="phone_txt"  placeholder="Enter your Phone Number" value="<?php print_r($data->phone_number) ?>" >
            <?php  echo form_error("phone_txt","<div class='error'>","</div>"); ?>

            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="number" class="form-control"  name="age_txt"  placeholder="Enter your Age" value="<?php print_r($data->age)?>" >
            <?php  echo form_error("age_txt","<div class='error'>","</div>"); ?>


            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control"  name="email_txt"  placeholder="Enter your Email" value="<?php print_r($data->email) ?>">
            <?php  echo form_error("email_txt","<div class='error'>","</div>"); ?>


            <button  type="submit" class="btn btn-primary">Update</button>
            <?php echo form_close(); ?>
        </div>
</body>
</html>