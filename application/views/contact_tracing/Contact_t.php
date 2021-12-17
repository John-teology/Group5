<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_tracing_information</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/contact_tracing/contact_t.css'); ?>">
</head>
<body>
    <button>
        <a href="<?php echo site_url("tracker")?>">back to homepage</a>
    </button>
    <center>
        <h3>
            <?php print_r($data->first_name)?>
        </h3>
         <h3>
            <?php print_r($data->last_name)?>
        </h3>
         <h3>
            <?php print_r($data->phone_number)?>
        </h3>
         <h3>
            <?php print_r($data->age)?>
        </h3>
         <h3>
            <?php print_r($data->email)?>
        </h3>
       

        <button>
            <a href="<?php echo site_url("tracker/contact_tracing_update/$data->id") ?>">Modify</a>
        </button>
    </center>
</body>
</html>