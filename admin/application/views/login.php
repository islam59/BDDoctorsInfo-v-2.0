<!DOCTYPE html>
<html>
    <head>
        <title>Login-BdDoctorsINFO</title>
        <style type="text/css" rel="stylesheet">
            *{ margin:0px; padding:0px; }
            body{ background-color:teal; }
            .container{
                background-color:teal; 
                width:30%; margin:100px auto;
                box-shadow:0px 0px 2px white; 
            }
            
            .form{ padding:10px; }
            .form-title{ /*style can be included...*/  }
            
            .style-text-left,.style-text-right{ /*style code for left & rihgt line*/
                width:28%; float:left; font-weight:bold; 
                text-align:center; margin-top:30px; height:4px;
            }
            .style-text-left{background:linear-gradient(to right, gray , teal);} /*form-title left line*/
            .style-text-right{background:linear-gradient(to left, gray , teal);}/*form-title right line*/
            
            .form-title-text{ /*style code for form-title*/
                font-size:2em; color:white; font-weight:bold; 
                text-align:center; line-height:2em; float:left;  width:44%;
            }   
            
            .form-group{ 
                clear:both; margin:10px 0px; padding:10px; 
            }
            .form-group input[type='text'],input[type='password']{ 
                width:90%; padding:10px 5%; background-color:#D1D0CE;
                border:none; border-radius:2px; box-shadow:0px 0px 5px black;
                font-size:1em; 
            }
            .form-group input[type='submit']{
                background: linear-gradient(to top, gray , teal);
                font-size:1em; padding:10px 12%; font-weight:bold; color:white;
                border:none; box-shadow:0px 0px 2px black; 
            }
            .form-group input[type='submit']:hover{background: linear-gradient(to bottom, gray, teal);}
            a{ font-size:0.98em; margin:0% 2%; color:#024; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="div-3">
                <div class="form">
                    
                    <div class="form-title">
                        <p class="style-text-left"></p>
                        <p class="form-title-text">Login Form</p>
                        <p class="style-text-right"></p>
                    </div>

                    <form action="<?php echo base_url(); ?>User/loginForm" method="post">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Lon in">
                            <span style="font-size:13px; color:red; ">
                              <?php 
                                  $msg = $this->session->flashdata('msg'); 
                                  if(isset($msg)){ echo $msg; }
                              ?> 
                            </span>                         
                        </div>
                    </form>

                </div>
                
            </div>
        </div>
    </body>
</html>