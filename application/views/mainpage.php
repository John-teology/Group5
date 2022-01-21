<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Mainpage.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: #1a1f22;
        }
    </style>
</head>
<body>
    



  
        <!-- Header Navigation Bar -->
    <div class="menu-bar">
        <div class="title">
            <h2>Establishment Traffic Control System</h2>
        </div>
        <div class="dropdown">
                <button id="profile" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $username ?>
                </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?php echo site_url('tracker/user_profile') ?>">Contact Trace Profile</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('tracker/MyEstablishments') ?>">Establishment list</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url("tracker/logout") ?>" > Log Out </a></li>
            </ul>
        </div>
        
    </div>

                <!-- body Content -->
            <div class="container">
                <div id="try" class="row-30">
                    <div  id="box1" class="col-6">
                        <a class="text-center" href="<?php echo site_url("tracker/Establishment_Create")?>"><h2 class="createE">Create Establishment</h2></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div id="box2" class="col-6">
                        <a class="text-center" href="<?php echo site_url("tracker/display_establishment")?>"><h2 class="viewE">View Establishment</h2></a>
                    </div>
                </div>
            </div>
    

</body>
</html>