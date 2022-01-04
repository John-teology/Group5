<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Establishment/establishment_Shows.css'); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
            background-color: #2C272e;
        }

    </style>

</head>
<body >

    <!-- <div class="container">
        <div class="container1">
            <h1 class="name">Establishment Name:</h1>
            <h1 class="arr1"><?php print_r($data->name)?></h1>

        </div>

        <div class="container2">
            <h1 class="location">Location:</h1>
            <h4 class="arr1"><?php print_r($data->location)?></h4>

        </div>
        <div class="container3">

            <div class="flexi">
            <h1 class="description">Description:</h1>
            </div>

            <div class="flexi1">
            <h4 class="arr1"><?php print_r($data->location)?></h4>
            </div>
        </div>
        <div class="container4">
            <h1 class="qr">QR CODE</h1>
        </div>

    </div> -->

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


<?php
if($data->userID == $userid)
{
?>
    <div class="wrapper">
            <a href="<?php echo site_url("tracker/este_update/$data->id") ?>"><button>Modify</button></a>
            <button>CONTACT TRACING</button>
            <button>ENTER ESTABLISHMENT</button>
    </div>
<?php
}
?>
 
<?php
if($data->userID != $userid)
{
?>
<div class="wrapper">
            <button>ENTER ESTABLISHMENT</button>
     </div>
<?php
}
?>
    
</body>
</html>