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
</head>
<body>
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
    if($empty==1)
    {
    ?>
        <table class="table">
        <thead>
        <tr>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        </tr>
        </thead>
        <?php
            for($i = 0; $i < count($data); $i++)
            {
        ?>
        <tbody>
            <tr>
            <td><?php echo $data[$i]->first_name ?></td>
            <td><?php echo $data[$i]->last_name ?></td>
            <td><?php echo $data[$i]->age ?></td>
            <td><?php echo $data[$i]->email ?></td>
            <td><?php echo $data[$i]->phone_number ?></td>

            </tr>
        </tbody>
        
        <?php
        }
        ?>
        </table>
        <a href="<?php echo site_url("tracker/MyEstablishments")?>">Back to mylist</a>
 <?php
    }
    ?>

</body>
</html>