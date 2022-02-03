<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Establishment Owner</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/light/css/Establishment/establishment_Name.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
        <div id="header" class="navbar  fixed-top">
            <div class="container">
                <a href="<?php echo site_url("tracker")?>" class="navbar-brand"><strong>Establishment Tracking Control System</strong></a>
                <button class="profbut"> <?php echo $username ?><i class="fa fa-user"></i> </button>
            </div>
        </div>
    <center>
        

        <div class="wrapper">
            <div class="scroll-div">
                <div class="div1">
                    <?php 
                        $len = count($data);
                        $establishment_n = "Establishment";
                        for($i = 0; $i < $len; $i++){
                                $id = $data[$i]->id;
                                ?>
                                <a href= "<?php echo site_url("tracker/Establishment_specific/$id")?>">
                                <button class="but1"> <strong><?php echo $establishment_n,":"?></strong>
                                    <h5><?php print_r($data[$i]->name)?></h5>
                                </button></a>
                            <?php
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        
            <a href="<?php echo site_url("tracker/Establishment_Create")?>"><button class="but3">Create</button></a>
    </center>
</body>
</html>