<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Establishment/establishment_monitor.css'); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #1a1f22;
        }

        #anchor{
            text-decoration: none;
            color: white;
        }
    </style>
    <script src="<?php echo site_url("assets/JS/qrcode.js") ?>"></script>
</head>
<body>

            <div class="menu-bar">
                <div class="title">
                    <a id="anchor" href="<?php echo site_url("tracker/display_establishment")?>"><h2 class="title1">Establishment Traffic Control System</h2></a>
                </div>
            </div>


        <div class="wrapper">
            <div class="container00">
                    <div class="row">
                        <div class="col align-self-center">
                            <h1 class="username"><?php print_r($data->name)?></h1>
                        </div>
                    </div>
            </div>

            <div class="containerss">
                    <div class="row">
                        <div class="col align-self-center">
                            <h1 class="numberC">Number of Customers: <?php echo $cust_num; ?></h1>
                        </div>
                    </div>
            </div>



                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-4">
                            <h1 class="location">Location: <?php print_r($data->location)?> </h1>
                        </div>   
                    </div>

                    <div class="row">
                        <div class="col-6 col-sm-4">
                            <h1 class="description1">Description:</h1>
                            <h4 class="arr4"><?php print_r($data->description)?></h4>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"><div id="output"></div></div>
                        <div class="col"></div>
                    </div>
                   
                </div>
                
                

                    <script>
                        var qrcode = new QRCode("output", {
                            text: "<?php echo site_url("tracker/Establishment_specific/$est_id")?>",
                            width: 200,
                            height: 150,
                            colorDark : "black",
                            colorLight : "#ffffff",
                            correctLevel : QRCode.CorrectLevel.H
                        });
                    </script>
                 

        </div>


    <?php
    if($data->userID == $userid)
    {
    ?>
            <div class="bondpaper">
                 <div class="container1">
                    <ul>
                        <li><a href="<?php echo site_url("tracker/Establishment_update/$data->id") ?>"><button>MODIFY</button></a></li>
                        <li><a href="<?php echo site_url("tracker/contact_tracing_report/$data->id")?>"><button>CONTACT TRACING</button></a></li>
                        <li><a href="<?php echo site_url("tracker/establishment_entry/$data->id")?>"><button>ENTER ESTABLISHMENT</button></a></li>
                        <li><a href="<?php echo site_url("tracker/delete_establishment_r/$data->id")?>" ><button>DELETE</button></a></li>
                    </ul>
                </div>
            </div>


    <?php
    }
    ?> 
    

    <?php
    if($data->userID != $userid)
    {
    ?>
            <div class="whole">
                <div class="whole1">
                    <div class="row">
                            <div class="col col-lg-2">
                            <a href="<?php echo site_url("tracker/establishment_entry/$data->id")?>" ><button id="id1">ENTER ESTABLISHMENT</button></a>
                            </div>
                    </div>
                </div>
            </div>

    <?php
    }
    ?> 


    <!-- <div class="container">
        <h1 class="arr2"><?php print_r($data->name)?></h1>
        

        <div class="row">
            <div class="col">
                <div class="container1">
                    <h1 class="description">Number of Customers:</h1>
                    <h4 class="arr1"><?php echo $cust_num; ?></h4>
                    
                </div>
                <div class="container2">
                    <div class="location1">
                        <h1 class="location">Location:</h1>
                        <h4 class="arr3"><?php print_r($data->location)?></h4>
                    </div>
                    <div class="container2_1">
                        <h1 class="description1">Description:</h1>
                        <h4 class="arr4"><?php print_r($data->description)?></h4>
                    </div>
                    <div class="container3" id="output">

                </div>
                </div>
                
            </div>
        </div>
    </div>
     <script>
                        var qrcode = new QRCode("output", {
                            text: "<?php echo site_url("tracker/Establishment_specific/$est_id")?>",
                            width: 200,
                            height: 150,
                            colorDark : "black",
                            colorLight : "#ffffff",
                            correctLevel : QRCode.CorrectLevel.H
                        });
                    </script>


<?php
if($data->userID == $userid)
{
?>
    <div class="wrapper">
            <a href="<?php echo site_url("tracker/Establishment_update/$data->id") ?>">
            <button>MODIFY</button>
            </a>

            <a href="<?php echo site_url("tracker/contact_tracing_report/$data->id")?>">
            <button>CONTACT TRACING</button>
            </a>

            <a href="<?php echo site_url("tracker/establishment_entry/$data->id")?>" >
            <button>ENTER ESTABLISHMENT</button>
            </a>

             <a href="<?php echo site_url("tracker/delete_establishment_r/$data->id")?>" >
            <button>DELETE</button>
            </a>
    </div>
<?php
}
?>
 
<?php
if($data->userID != $userid)
{
?>
<div class="wrapper">
             <a href="<?php echo site_url("tracker/establishment_entry/$data->id")?>" >
            <button id="id1">ENTER ESTABLISHMENT</button>
            </a>
     </div>
<?php
}
?> -->
    
</body>
</html>