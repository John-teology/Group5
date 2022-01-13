<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Establishments</title>
    <link rel="stylesheet"type="text/css"href="<?php echo base_url('assets/css/Establishment/display_establishments.css');?>">
</head>
<body>
    <div class="box">
        <div class="scroll">
            <div class="div1"></div>
            
                <?php
                $establishment_p = "Establishment";
                    for($i = 0; $i < count($establishments); $i++){
                        $id = $establishments[$i]['id']
                ?>
                <a href= "<?php echo site_url("tracker/Establishment_specific/$id")?>">
                <button class="ton1"><strong><?php echo $establishment_p?></strong></button>
                <h4>
                    <?php 
                    echo "<br/>";
                       print_r($establishments[$i]['name']);
                    ?></h4>
                </a>
                <?php
                    }
                ?>  
            </div>
        </div>     
    </div>
</body>
</html>