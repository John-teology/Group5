<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>welcome</h1>
   <a href="<?php echo site_url("tracker/display_establishment") ?>">LEave</a>
   <?php
    echo $this->session->userdata("entered");
    echo $this->session->userdata("username");
    echo $est_id;

   ?>
</body>
</html>