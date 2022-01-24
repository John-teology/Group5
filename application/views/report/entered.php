<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/report/entered.css'); ?>">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <style>
            body{
                background-color: #1a1f22;
            }
            button{
                border-radius: 10px;
            }
            h2{
                font-weight: bold;
            }
            h2:hover{
                color:blue;
            }

        </style>
    </head>
    <body>

        <div class="menu-bar">
            
            <div class="title">
                <a id="anchor" href="<?php echo site_url("tracker")?>"><h2 id="h2">Establishment Traffic Control System</h2></a>
            </div>
            
        </div>
        

        <div class="containerf">
                <h1 class="arr2"><?php print_r($data->name)?></h1>
                <h3 class="arr2">Welcome! We're glad that you're here!</h3>
            <div class="container1">
                <div class="row">
                        <div class="col">
                    
                            <div class="location1">
                                <h1 class="location">Location:</h1>
                                <h4 class="arr1"><?php print_r($data->location)?></h4>
                            </div>
                    
                            <h1 class="description">Description:</h1>
                            <h4 class="arr3"><?php print_r($data->description)?></h4>
                    
                        </div>
                </div>      
            </div>
            
        </div>
    
        <div class="wrapper">
                <a href="<?php echo site_url("tracker/display_establishment") ?>" >
                    <button class="buto1">LEAVE ESTABLISHMENT</button>
                </a>
        </div>

    </body>
</html>