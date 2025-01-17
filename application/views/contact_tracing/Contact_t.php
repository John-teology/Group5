<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_tracing_information</title>
     <?php if($theme == ""){
            $theme = 'light';
        }
        ?>
    <link rel="stylesheet"type="text/css"href="<?php printf(base_url('assets/%s/css/contact_tracing/contact_t.css'),$theme);?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
    <style>
        body{
            /* background-color:#1a1f22; */
            
            font-family: 'Helvetica';
        }
        button{
            border-radius: 10px;
            margin: 10px 0 10px 0;
            font-size: 18px;
        }
        .btn{
            background-color: #00994d;
            border-width: 0px;
            margin: 20px 0 0 38%;
            border-radius: 10px;
        }
        .btn:hover {
        background-color: #4db882;
        }
        a{
            color:white;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover{
            color: white;
        }
        .navbar{
            color: white;
        }
    </style>


</head>
<body class="bodyy">

    
        <div id="header" class="navbar">
            <div class="container">
                <a class="header-title" href="<?php echo site_url("tracker")?>" class="navbar-brand">Establishment Traffic Control System</a>
            </div> 
        </div>
        
    

    <div class="wrappers">

<div class="logo">  
    
    <h4 class="title"> Contact Tracing Form </h4>
</div>
    <div class="form">  
        <div class="div1">
        <div class="wrapper">
            <label for="exampleInputPassword1" class="form-label">First Name</label>
            <input type="text" class="form-control"  name="firstname_txt"  placeholder="Enter your First Name" value="<?php print_r($data->first_name)?>" disabled >

            <label for="exampleInputPassword1" class="form-label"> Last Name</label>
            <input type="text" class="form-control"  name="lastname_txt"  placeholder="Enter your Last Name" value="<?php print_r($data->last_name) ?>" disabled >

            
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input type="number" class="form-control"  name="phone_txt"  placeholder="Enter your Phone Number" value="<?php print_r($data->phone_number) ?>" disabled >

            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="number" class="form-control"  name="age_txt"  placeholder="Enter your Age" value="<?php print_r($data->age)?>" disabled>


            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control"  name="email_txt"  placeholder="Enter your Email" value="<?php print_r($data->email) ?>" disabled>

            <button class="btn btn-primary">
                <a id="anchor" href="<?php echo site_url("tracker/contact_tracing_update/$data->id") ?>">Modify</a>
            </button>
        </div>

  
   
        

                
</body>
</html>