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

    <!-- <div class="header">
      <nav>
        <ul>
        <li class="li"><h1 class="title">Establishment Traffic Control System</h1></li>
          <li class="li1"><a class="user" href= "<?php echo site_url("tracker/user_profile")?>" > <h3 class="User"><?php echo $username ?></h3> </a></li>
            <ul class="Dropdown">
              <li class="li11"><a class="logout" href= "<?php echo site_url("tracker/logout") ?>" > Log0ut </a></li>
              <li><a href="<?php echo site_url('tracker/displayEstab') ?>"><button>Establishment list</button></a></li>
              <li><a href="<?php echo site_url('tracker/user_profile') ?>"><button>Contact Trace Profile</button></a></li>
            </ul>
        </ul>
      </nav>
    </div> -->

    <div class="menu-bar">
        <ul>
              <h1 class="title">Establishment Traffic Control System</h1>
                <!-- <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Establishment Traffic Control System</a>
                </li> -->
                <li id="profile"><a href="#"><i><button class="profbut"><h3> <?php echo $username ?> </h4></button></i></a>
                
                <div class="sub-menu-1">
                    <ul>
                      <li><a href="<?php echo site_url('tracker/user_profile') ?>">Contact Trace Profile</a></li>
                      <li><a href="<?php echo site_url('tracker/displayEstab') ?>">Establishment list</a></li>
                      <li class="li11"><a class="logout" href= "<?php echo site_url("tracker/logout") ?>" > Log0ut </a></li>
                     
                    </ul>
                </div>
            </li>
                <!-- <li><a href="#"><i class="fa fa-clone" aria-hidden="true"></i>Services</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="#">Web Designing</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Mobile App</a></li>
                        </ul>
                    </div>
                
                </li> -->
                <!-- <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i>Clients</a></li>
                <li><a href="#"><i class="fa fa-angellist" aria-hidden="true"></i>Investers</a></li>
                <li><a href="#"><i class="fa fa-inr" aria-hidden="true"></i>Pricing</a></li>
                <li><a href="#"><i class="fa fa-edit" aria-hidden="true"></i>Training</a></li>
                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li> -->
        </ul>
    </div>



    
    <div class="bondpaper">
        <div class="box1">
            <a href="<?php echo site_url("tracker/user_prof_este")?>"><h2 class="createE">Create Establishment</h2></a>
            <!-- <a  href="<?php echo site_url("tracker/user_prof_este")?>"> -->
            <!-- <button class="buttn"><a href="<?php echo site_url("tracker/user_prof_este")?>">Create</a></button> -->

        </div>
        <div class="box2">
            <h2 class="viewE">View Establishment</h2>
        </div>

    </div>
</body>
</html>