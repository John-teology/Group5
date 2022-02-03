<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Tracing list</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/light/css/report/ct_report.css'); ?>">

    <style>
       h2{
           font-weight: bold;
       }
       h2:hover{
           color: #4db882;
       }
    
    </style>
</head>
<body>

    <div class="menu-bar">
        <div class="title">
            <a id="anchor" href="<?php echo site_url("tracker/MyEstablishments")?>"><h2>Establishment Traffic Control System</h2></a>
        </div>
        
    </div>


    <?php
        if($empty==0)
        {
    ?>
        <h1>No customer</h1>
          <a href="<?php echo site_url("tracker/MyEstablishments")?>">Back to mylist</a>
    <?php
    }
    ?>

    <?php
    
    ?>

    <?php
    if($empty==1)
    {
    ?>
<div class="wrapper">
    <div class="wrap">
    <table class="table table-bordered  ">
        <!-- firstname -->
        <thead id="head">
            <tr>
                <th scope="col">FirstName</th>
            </tr>
        </thead>
            <?php 
                for($i=0; $i < count($data); $i++) {

            ?>
            <tbody>
                <tr id="tr">
                <td><?php echo $data[$i]->first_name ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
    </table>
    </div>
    
    <div class="wrap">
    <table class="table table-bordered  ">
        <!-- lastname -->
        <thead id="head">
            <tr>
                <th scope="col">LastName</th>
            </tr>
        </thead>
            <?php 
                for($i=0; $i < count($data); $i++) {

            ?>
            <tbody>
                <tr id="tr">
                <td><?php echo $data[$i]->last_name ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>


    </table>
    </div>
    
    <div class="wrap">
    <table class="table table-bordered  ">
        <!-- AGE -->
        <thead id="head">
            <tr>
                <th scope="col">Age</th>
            </tr>
        </thead>
            <?php 
                for($i=0; $i < count($data); $i++) {

            ?>
            <tbody>
                <tr id="tr">
                <td><?php echo $data[$i]->age ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>


    </table>
    </div>

    <div class="wrap">
    <table class="table table-bordered  ">
        <!-- Email -->
        <thead id="head">
            <tr>
                <th scope="col">Email</th>
            </tr>
        </thead>
            <?php 
                for($i=0; $i < count($data); $i++) {

            ?>
            <tbody>
                <tr id="tr">
                <td><?php echo $data[$i]->email ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>


    </table>
    </div>

    <div class="wrap">
    <table class="table table-bordered  ">
        <!-- Phone Number -->
        <thead id="head">
            <tr>
                <th scope="col">Phone Number</th>
            </tr>
        </thead>
            <?php 
                for($i=0; $i < count($data); $i++) {

            ?>
            <tbody>
                <tr id="tr">
                <td><?php echo $data[$i]->phone_number ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>


    </table>
    </div>

</div>
    
 <?php
    }
    ?>

</body>
</html>