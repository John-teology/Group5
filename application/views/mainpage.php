<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  

    <div class="menu-bar">
        <ul>
              <h1 class="title">Establishment Traffic Control System</h1>
              
             <li id="profile">
                 <a href="#"><i><button class="profbut"><h3> <?php echo $username ?> </h4></button></i></a>
                
                <div class="sub-menu-1">
                    <ul>
                      <li><a href="<?php echo site_url('tracker/user_profile') ?>">Contact Trace Profile</a></li>
                      <li><a href="<?php echo site_url('tracker/MyEstablishments') ?>">Establishment list</a></li>
                      <li class="li11"><a class="logout" href= "<?php echo site_url("tracker/logout") ?>" > Log Out </a></li>
                     
                    </ul>
                </div>
            </li>
               
        </ul>
    </div>



    
    <div class="bondpaper">
        <div class="box1">
            <a href="<?php echo site_url("tracker/Establishment_Create")?>"><h2 class="createE">Create Establishment</h2></a>
          

        </div>
        <div class="box2">
            <a href="<?php echo site_url("tracker/display_establishment")?>">
            <h2 class="viewE">View Establishment</h2>
            </a>
        </div>

    </div>
</body>
</html>