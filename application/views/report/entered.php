<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/report/entered.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-color: #1a1f22;
        }

    </style>
    <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Establishment/establishment_Shows.css'); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <style>
        body{
            background-color: #2C272e;
        }

    </style>
</head>
<body>
<<<<<<< HEAD
    <div class="container">
        <h1>welcome</h1>
    </div>
    <div class="container1">
        <a href="<?php echo site_url("tracker/display_establishment") ?>">
            <button>Leave</button>
        </a>
    </div> 
    
   <!-- <?php // print_r($report_id);
    echo phpversion();
   ?> -->
=======
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="name">Establishment Name:</h1>
                <h1 class="location">Location:</h1>
                <h1 class="description">Description:</h1>
            </div>
                <div class="col">
                    <h1 class="arr2"><?php print_r($data->name)?></h1>
                    
                    <h4 class="arr1"><?php print_r($data->location)?></h4>
                    <h4 class="arr1"><?php print_r($data->description)?></h4>



                </div>
        </div>
  </div>
  
<div class="wrapper">
             <a href="<?php echo site_url("tracker/display_establishment") ?>" >
            <button>LEAVE ESTABLISHMENT</button>
            </a>
     </div>

>>>>>>> fed8720ede9f6f50089ac2faa7390884606b6c0a
</body>
</html>