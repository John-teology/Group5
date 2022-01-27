<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Establishment/establishment_monitor.css'); ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Establishment/Establishment_updates.css'); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #1a1f22;
        }

      .popup .overlay {
            position:fixed;
            top:0px;
            left:0px;
            width:100vw;
            height:100vh;
            background:rgba(0,0,0,0.7);
            z-index:1;
            display: none;
        }
        .popup .content {
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%) scale(0);
            background:#fff;
            width:400px;
            height:200px;
            z-index:2;
            text-align:center;
            box-sizing:border-box;
            padding: 20px 40px 0 0;
        }
        .popup .close-btn {
            cursor: pointer;
            position:absolute;
            right:20px;
            top:20px;
            width:30px;
            height:30px;
            background: #222;
            color:#fff;
            font-size:25px;
            font-weight:600;
            line-height:30px;
            text-align:center;
            border-radius:50%;
        }
        
        .popup.active .overlay {
            display:block;
        }

        .popup.active .content {
            transition: all 300ms ease-in-out;
            transform:translate(-50%, -50%) scale(1);
        }
    
    </style>
    <script>
        function togglePopup() 
            {
            document.getElementById ("popup-1").classList.toggle("active");
            }
    </script>
    <script src="<?php echo site_url("assets/JS/qrcode.js") ?>"></script>
    <script src="<?php echo site_url("assets/JS/html2canvas.min.js") ?>"></script>

</head>
<body>

            <div class="header">
            <nav>
                <ul>
                <a href="<?php echo site_url("tracker")?>"><li class="li"><h1 class="title1">Establishment Traffic Control System</h1></li></a>
                </ul>
            </nav>
        </div>


        
        <div class="container">
            <div class="logo">
                <h3 class="title"><?php print_r($data->name)?></h3>
            </div>
            
            <div class="form">
                

                    <div class="div2">
                        <label class="form-label">Number of Customers</label>
                        <i class="fa fa-user"></i> 
                        <input type="text" class="form-control"  name="name_txt"  placeholder="Enter Name" value="<?php echo $cust_num; ?>" disabled >
                    </div>

                    <div class="div2">
                        <label class="form-label">Location</label>
                        <i class="fa fa-location-arrow"></i>
                        <input type="text" class="form-control"  name="location_txt"  placeholder="Enter your Location" value="<?php print_r($data->location)?>" disabled >
                    </div>

                    <div class="div2">                       
                        <label class="form-label">Description</label>
                        <i class="fa fa-sticky-note"></i>
                        <input type="text" class="form-control"  name="description_txt"  placeholder="Enter your Description" value="<?php print_r($data->description)?>" disabled >
                          <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <div class="popup" id="popup-1">
                                    <div class="overlay"></div>
                                    <div class="content">
                                          <div class="close-btn" onclick="togglePopup()">&times;
                                            </div>
                                                <button id="id">
                                                <div id="output"></div>
                                                </button>
                                    </div>
                            </div>
                <button onclick="togglePopup()">Generate Qr Code</button>
                        </div>
                        <div class="col"></div>
                    </div>
                    </div>

             
                        
                
            </div>        
        </div>

        
                    <script>
                        var qrcode = new QRCode("output", {
                            text: "<?php echo site_url("tracker/Establishment_specific/$est_id")?>",
                            width: 250,
                            height: 150,
                            colorDark : "black",
                            colorLight : "#ffffff",
                            correctLevel : QRCode.CorrectLevel.H
                        });
                    </script>

                    <script>
                        document.getElementById("id").onclick = function() {
                            const screenshotTarget = document.getElementById("output");

                            html2canvas(screenshotTarget).then((canvas) => {
                                const base64image = canvas.toDataURL("image/png");
                                var anchor = document.createElement("a");
                                anchor.setAttribute("href",base64image);
                                anchor.setAttribute("download","<?php print_r($data->name)?>.png");
                                anchor.click();
                                anchor.remove();
                            });
                           
                        };
                    </script>
         
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

    
</body>
</html>