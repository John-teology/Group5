<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Mainpage.css'); ?>">
</head>
<body>

    <div class="header">
      <nav>
        <ul>
        <li class="li"><h1 class="title">Establishment Traffic Control System</h1></li>
          <li class="li1"><a class="logout" href= "<?php echo site_url("tracker/logout") ?>" > Log0ut </a></li>
        </ul>
      </nav>
    </div>




    <div class="div1">
        <h3 class="User"><?php echo $username ?></h3>
        <!-- <a class="logout" href= "<?php echo site_url("tracker/logout") ?>" > Logout </a> -->
    </div>

    
    <div class="bondpaper">
        <div class="box1">
            <h2 class="createE">Create Establishment</h2>
            <button class="buttn"><a href="tracker/createEstablishment">Create</a></button>

        </div>
        <div class="box2">
            <h2 class="viewE">View Establishment</h2>
            <button class="buttn">View</button>
        </div>

    </div>
</body>
</html>