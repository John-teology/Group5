<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Establishments</title>
    <link rel="stylesheet"type="text/css"href="<?php echo base_url('assets/css/Establishment/display_establishments.css');?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <style>
        body{
            background-color: #1a1f22;
        }
    </style>
    <script src="<?php echo site_url("assets/JS/display_establishment.js") ?>"></script>
</head>
<body>

    <div class="menu-bar">
        <div class="title">
            <h2>Establishment Traffic Control System</h2>
        </div>

        <div class="dropdown">
                <button id="profile" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $username ?>
                </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li class="list"><a id="listname" class="dropdown-item" href="<?php echo site_url('tracker/Establishment_Create') ?>">Create Establishment</a></li>
                <li class="list"><a id="listname" class="dropdown-item" href="<?php echo site_url('tracker/user_profile') ?>">Contact Trace Profile</a></li>
                <li class="list"><a id="listname" class="dropdown-item" href="<?php echo site_url('tracker/MyEstablishments') ?>">Establishment list</a></li>
                <li class="list"><a id="listname" class="dropdown-item" href="<?php echo site_url("tracker/logout") ?>" > Log Out </a></li>
            </ul>
        </div>
        
    </div>
    <div class="spacer"></div>
    
    <div id="estab">
        
    <?php
        $establishment_p = "Establishment: ";
        $noOfCustomer = "No. of Customer: ";
        $place = "Place: ";

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
                    
            <div class="container-xxl">
                <a class="anchor" href= "<?php echo site_url("tracker/Establishment_specific/$id")?>">
                    <div class="row">
                        <div id="b1" class="col"></div>
                        <div class="col">
                            <i id="building"class="fa fa-building-o" style="font-size:36px"></i>
                            <strong><?php print_r($establishments[$i]['name']);?></strong>
                        </div>
                        <div class="col"></div>
                    </div>

                <div class="row">
                
                    <div class="col">
                        <i id="usersnum" class="fa fa-users" style="font-size:36px"></i>
                        <?php
                            echo count($status);
                        ?>
                    </div>
                    <div class="col"></div>

                    <div class="col">
                        <i id="globe" class="fa fa-globe" style="font-size:36px"></i>
                        <?php
                                print_r($establishments[$i]['location']);
                        ?>
                    </div> 
                </div>
                </a>

            </div>
                     
    <?php
        }
    ?>  

    </div>

    <div id="addnew"></div>


</body>
</html>