<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Establishment</title>
    
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Establishment/Establishment_C.css'); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
    <style>
        .title1{
            color: white;
            font-size: 30px;
        }
    </style>
    <body>

        <?php  echo form_open("tracker/Establishment_auth", array(
            "method" => "post",
            "enctype" => "multipart/form-data")); 
        ?>

        <div class="header">
            <a href="<?php echo site_url("tracker")?>">
                <nav>
                    <ul>
                    <li class="li"><h1 class="title1">Establishment Traffic Control System</h1></li>
                    </ul>
                </nav>
            </a>
        </div>


        <div class="container">
            <div class="logo">
                <h3 class="title">Create Establishment</h3>
            </div>
            
            <div class="form">
                

                    <div class="div2">
                        <label class="form-label">Name</label>
                        <i class="fa fa-user"></i> 
                        <input type="text" class="form-control"  name="name_txt"  placeholder="Enter Name" value="<?php echo set_value('name_txt') ?>" >
                        <?php  echo form_error("name_txt","<div class='error'>","</div>"); ?>
                    </div>

                    <div class="div2">
                        <label class="form-label">Location</label>
                        <i class="fa fa-location-arrow"></i>
                        <input type="text" class="form-control"  name="location_txt"  placeholder="Enter your Location" value="<?php echo set_value('location_txt') ?>" >
                        <?php  echo form_error("location_txt","<div class='error'>","</div>"); ?>
                    </div>

                    <div class="div2">                       
                        <label class="form-label">Description</label>
                        <i id="ii" class="fa fa-sticky-note"></i>
                        <textarea type="" class="form-control"  name="description_txt"  placeholder="Enter your Description" value="<?php echo set_value('description_txt') ?>" cols="30" rows="10"></textarea>
                        <?php  echo form_error("description_txt","<div class='error'>","</div>"); ?>
                    </div>

                    
                        <button class="signup"  type="submit" class="btn btn-primary">Submit</button>
                        <?php echo form_close(); ?>
                    
                
            </div>        
        </div>
          

    </body>
</html>