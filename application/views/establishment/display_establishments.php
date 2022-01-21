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
        <div class="header">
            <a href="<?php echo site_url("tracker")?>">
            <nav>
                <ul>
                <li class="li"><h1 class="title1">Establishment Traffic Control System</h1></li>
                </ul>
            </nav>
            </a>
        </div>
    <div class="box">
        <div class="scroll">
            <div class="div1"></div>
              

                <?php
                $establishment_p = "Establishment:";
                    for($i = 0; $i < count($establishments); $i++){
                        $id = $establishments[$i]['id'];
                        $report = array(
                    // this will select all report that inside column is equal to 1
                            " est_id"=> $id,
                            "date_t" => date("Y-m-d"),
                            "inside" => 1
                        );
                            $status = $this->t_model->get_report_status($report);
?>
                <a href= "<?php echo site_url("tracker/Establishment_specific/$id")?>">
                <button class="ton1"><strong><?php echo $establishment_p?></strong>
                <h4>
                    <?php 
                    echo "<br/>";
                       print_r($establishments[$i]['name']);
                       print_r($establishments[$i]['location']);
                        echo count($status);



                    ?></h4>
                    </button>
                </a>
                <?php
                    }
                ?>  
            </div>
        </div>     
    </div>
</body>
</html>