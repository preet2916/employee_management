<?php

    $uid = $_GET["uid"];

    $lh="localhost";
    $un="root";
    $ps="";
    $db="employee_table";

    $con=new mysqli($lh,$un,$ps,$db);

    if($con)
    {
        $query = "SELECT * FROM registration where id = $uid";

        $result=mysqli_query($con,$query);

        $data = mysqli_fetch_assoc($result);

        $username = $data['username'];
        $email = $data['email'];
        $contact = $data['contact'];
        $password = $data['password'];
    }


    if(isset($_POST['update']))
    {
        $username1 = $_POST['username'];
        $email1 = $_POST['email'];
        $contact1 = $_POST['contact'];
        $password1 = $_POST['password'];

        if($con)
        {
            //echo "Connection Succesfull"; 
            
            $query1 = "UPDATE registration SET username = '$username1', 
                       email = '$email1', contact = '$contact1',
                       password = '$password1' where id='$uid'";

            $result1 = mysqli_query($con,$query1);
            if($result1)
            {
                echo "Inserted SUccessfully";
                header("location:display_web.php");
            }
        }
        else
        {
            echo "Unsuccessfull";
        }
    }
?>


<!-- <html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <form method="post">
                        
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" id="username" name="username"  class="form-control" value="<?php echo $username ?>" required>
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" id="email" name="email"  class="form-control" value="<?php echo $email ?>" required>
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                            </div>
                            <input type="number" id="contact" name="contact"  class="form-control" value="<?php echo $contact ?>" required>
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password" name="password"  class="form-control" value="<?php echo $password ?>" required>
                        </div>
                
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" id="update" name="update"  value="Update" class="btn float-right login_btn">
                            <a href="display_web.php">Display the data</a>
                        </div>
        </form>
    </body>
</html> -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
    <style>
        /* Made with love by Mutiullah Samim*/

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
        background-image: url('https://wallpaperaccess.com/full/1143632.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
        }

        .container{
        height: 100%;
        align-content: center;
        }

        .card{
        height: 450px;
        margin-top: auto;
        margin-bottom: auto;
        width: 400px;
        /* background-color: rgba(0,0,0,0.5) !important; */
        background-color: #000000b8 !important;
        }

        .social_icon span{
        font-size: 60px;
        margin-left: 10px;
        color: #FFC312;
        }

        .social_icon span:hover{
        color: white;
        cursor: pointer;
        }

        .card-header h3{
        color: white;
        }

        .social_icon{
        position: absolute;
        right: 20px;
        top: -45px;
        }

        .input-group-prepend span{
        width: 50px;
        background-color: #FFC312;
        color: black;
        border:0 !important;
        }

        input:focus{
        outline: 0 0 0 0  !important;
        box-shadow: 0 0 0 0 !important;

        }

        .remember{
        color: white;
        }

        .remember input
        {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
        }

        .login_btn{
        color: black;
        background-color: #FFC312;
        width: 100px;
        }

        .login_btn:hover{
        color: black;
        background-color: white;
        }

        .links{
        color: white;
        }

        .links a{
        margin-left: 4px;
        }

        @media (max-width:370px){
            .social_icon span {
                font-size: 30px !important;
            }
            .social_icon {
                top: 0px !important;
            }
            .h3, h3 {
                font-size: 20px !important;
            }
            .links {
                font-size: 12px !important;
            }
            .card-footer a{
                font-size: 12px !important;
            }
            .card{
                height: 450px !important;
            }
            .login_btn {
                margin-top: 10px !important;
            }
            .card-footer{
                padding: 0 1.25rem 1.75rem 1.25rem !important;
            }
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Update</h3>
                    <!-- <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div> -->
                </div>
                <div class="card-body">
                    <form method="post">
                        <!-- <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                            </div>
                            <input type="text" id="first" name="first"  class="form-control" placeholder="Name (only character)" pattern="[A-Za-z]{1,}" required>
                        </div> -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" id="username" name="username"  class="form-control" value="<?php echo $username ?>" required>
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" id="email" name="email"  class="form-control" value="<?php echo $email ?>" required>
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                            </div>
                            <input type="number" id="contact" name="contact"  class="form-control" value="<?php echo $contact ?>" required>
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="password" name="password"  class="form-control" value="<?php echo $password ?>" required>
                        </div>
                        <!-- <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" id="repeat" name="repeat" class="form-control" placeholder="Repeat password" required>
                        </div> -->
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" id="update" name="update"  value="Update" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Do you want to see all data<a href="display_web.php">Click Here</a>
                    </div>
                    <!-- <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  </body>
</html>