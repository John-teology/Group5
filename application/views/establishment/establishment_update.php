<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Establishment</title>
    
        <?php if($theme == ""){
            $theme = 'light';
        }
        ?>
        <link rel="stylesheet"type="text/css"href="<?php printf(base_url('assets/%s/css/Establishment/Establishment_updates.css'),$theme);?>">      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <!-- For autocomplete thing -->
            <link
            rel="stylesheet"
            href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"
            />
            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script src="<?php echo base_url('assets/js/establishment_C.js'); ?>"></script>
            <!-- For autocomplete thing -->
    </head>
    <body>
          <!-- i just need the link that is why -->
        <input id= "url" type="text" value="<?php echo site_url("tracker/establishment_locations");?>" hidden >
        <!-- i just need the link that is why -->

        <?php  echo form_open("tracker/este_update_logic/$data->id", array(
            "method" => "post",
            "enctype" => "multipart/form-data")); 
        ?>

        <div class="header">
            <nav>
                <ul>
                <a href="<?php echo site_url("tracker")?>"><li class="li"><h1 class="title1">Establishment Traffic Control System</h1></li></a>
                </ul>
            </nav>
        </div>


        <div class="container">
            <div class="logo">
                <h3 class="title">Update Establishment</h3>
            </div>
            
            <div class="form">
                

                    <div class="div2">
                        <label class="form-label">Name</label>
                        <i class="fa fa-user"></i> 
                        <input type="text" class="form-control"  name="name_txt"  placeholder="Enter Name" value="<?php print_r($data->name)?>" autofocus >
                        <?php  echo form_error("name_txt","<div class='error'>","</div>"); ?>
                    </div>

                    <div class="div2">
                        <label class="form-label">Location</label>
                        <i class="fa fa-location-arrow"></i>
                        <input type="text" class="form-control" id="tags" name="name"  placeholder="Enter your Location" value="<?php print_r($data->location)?>" >
                        <?php  echo form_error("location_txt","<div class='error'>","</div>"); ?>
                    </div>

                    <div class="div2">                       
                        <label class="form-label">Description</label>
                        <i class="fa fa-sticky-note"></i>
                        <input type="text" class="form-control"  name="description_txt"  placeholder="Enter your Description" value="<?php print_r($data->description)?>" >
                        <?php  echo form_error("description_txt","<div class='error'>","</div>"); ?>
                    </div>

                    
                        <button id="btn1"class="signup"  type="submit" class="btn btn-primary">Update</button>
                        <?php echo form_close(); ?>
                    
                
            </div>        
        </div>
            

    </body>
</html> 