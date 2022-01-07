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
    <?php
        for($i = 0; $i < count($establishments); $i++){
            $id = $establishments[$i]['id']
    ?>
    <a href= "<?php echo site_url("tracker/Establishment_specific/$id")?>">
        <?php 
        echo "<br/>";
              print_r($establishments[$i]['name']);
        ?>
    </a>
    <?php
        }
    ?>       
   </div>
</body>
</html>