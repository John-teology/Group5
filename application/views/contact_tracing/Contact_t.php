<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_tracing_information</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/contact_tracing/contact_t.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #1a1f22;
        }
    </style>

</head>
<body>

    <div class="menu-bar">
        <div class="title">
            <a id="anchor" href="<?php echo site_url("tracker/display_establishment")?>"><h2 id="title">Establishment Traffic Control System</h2></a>
        </div>
    
        
    </div>
    
    <center>
    <div class="box">
        <div class="container1">

             <div class="div1">
                    <h3>
                        <?php print_r($data->first_name)?>
                    </h3>

            </div>

            <div class="div2">
                    <h3>
                        <?php print_r($data->last_name)?>
                    </h3>
            </div>
                    
            <div class="div3">
                    <h3>
                        <?php print_r($data->phone_number)?>
                    </h3>
            </div>

            <div class="div4">
                    <h3>
                        <?php print_r($data->age)?>
                    </h3>
             </div>

             <div class="div5">
                    <h3 class="email">
                        <?php print_r($data->email)?>
                    </h3>
            </div>
        </div>
            
    </div>        

        
        <button>
            <a id="anchor" href="<?php echo site_url("tracker/contact_tracing_update/$data->id") ?>">Modify</a>
        </button>
        
    </center>
</body>
</html>