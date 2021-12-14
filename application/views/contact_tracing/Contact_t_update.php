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
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/contact_tracing/contact_t_update.css'); ?>">

 
</head>
<body>
     <button>
        <a href="<?php echo site_url("tracker/contact_tracing")?>">back</a>
    </button>
    <?php  echo form_open("tracker/contact_tracing_update_auth/$data->id", array(
        "method" => "post",
        "enctype" => "multipart/form-data")); ?>
    

    <label for="exampleInputPassword1" class="form-label">First Name</label>
    <input type="text" class="form-control"  name="firstname_txt"  placeholder="Enter your First Name" value="<?php print_r($data->first_name)?>" >
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
</body>
</html>