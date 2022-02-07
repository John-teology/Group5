<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Establishments</title>
    <?php if($theme == ""){
            $theme = 'light';
        }
        ?>
    <link rel="stylesheet"type="text/css"href="<?php printf(base_url('assets/%s/css/Establishment/display_establishments.css'),$theme);?>">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
  
    <script src="<?php echo site_url("assets/JS/display_establishment.js") ?>"></script>
  
</head>
<body>

    <script>
    function autoSubmit()
    {
        var formObject = document.forms['theForm'];
        formObject.submit();
    }
    </script>
    <div class="menu-bar">
        <div class="title">
            <h2>Establishment Traffic Control System</h2>

        <?php  echo form_open("tracker/themes", array(
            "method" => "post",
            "enctype" => "multipart/form-data",
            "id" => 'theForm'
        )); 
        ?>
            <div class="theme"  style="color: black;">

                <input type="radio"  name="theme" <?php if ($theme == 'dark') { ?>checked='checked' <?php } ?> value="dark" onchange="autoSubmit();"> dark

                <input type="radio" <?php if ($theme == 'light') { ?>checked='checked' <?php } ?>   value="light" name="theme" onchange="autoSubmit();" > light

               

            </div>
        <?php echo form_close(); ?>


    </div>

        <div class="dropdown">
                <button id="profile" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $username ?>
                </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li class="list"><a id="listname" class="dropdown-item" href="<?php echo site_url('tracker/Establishment_Create') ?>">Create Establishment</a></li>
                <li class="list"><a id="listname" class="dropdown-item" href="<?php echo site_url('tracker/user_profile') ?>">Contact Trace Profile</a></li>
                <li class="list"><a id="listname" class="dropdown-item" href="<?php echo site_url('tracker/MyEstablishments') ?>">Establishment List</a></li>
                <li class="list"><a id="listname" class="dropdown-item" href="<?php echo site_url("tracker/logout") ?>" > Log Out </a></li>
            </ul>

            

        </div>

        
    </div>
    
   

    <input id="api" type="text" value="<?php echo site_url('tracker/estab_api'); ?>" hidden>
    <input id="estab_link" type="text" value="<?php echo site_url('tracker/establishment_specific'); ?>" hidden>
    <div class="spacer"></div>
    <div id="addnew"></div>


</body>
</html>