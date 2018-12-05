  <?php 

  if (isset($_SESSION['username']) == '') 

  { 



?>

<style>

    body {
        background: #2C3034;
    }
    .mywhite {
        background: white!important;
        color: black!important;
        border-radius: 20px;
        margin-top: 7%;
    }
    

    .myinp {
        background: #CBDDF0;
        color: black!important;
        border-radius: 10px!important;

    }

    .myheight {
        height: 80vh;
    }

    .btn-block {
        margin-bottom: 20px!important;
    }

</style>


<div class="container myheight py-5">
    <div class="row mx-auto">
        <div class="col-md-6 mx-auto mywhite">
            <h2 class="text-center py-3">Register new user</h2>
            <div class="row">
                <div class="col-md-12 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">

                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" action="register.php" method="POST" text-dark>
                                <div class="form-group">
                                    <label for="uname1" class="text-body">Username</label>
                                    <input type="text" class="form-control form-control-lg myinp" name="uname1" id="uname1" required="">
                                    <div id="userfeedb"></div>
                                </div>
                                <div class="form-group text-body">
                                    <label for="pwd1" class="text-body">Password</label>
                                    <input type="password" class="form-control form-control-lg myinp" id="pwd1" name="pwd1" required="" autocomplete="new-password">
                                    <div id="passfeedb"></div>
                                </div>
                                <div class="form-group text-body">
                                    <label for="regimage" class="text-body">Image link</label>
                                    <input type="text" class="form-control form-control-lg myinp" id="regimage" name="regimage" required="">
                                    <div id="imgfeedb"></div>
                                </div>
<!--                                 <div>
                                    <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description small text-dark">Remember me on this computer</span>
                                    </label>
                                </div> -->
                                <button type="submit" name="userregistration" id="regsubmit" class="btn btn-primary btn-block mybspace">REGISTER</button>
                                 <a href="index.php"><h4 class="text-center">already have an account? Login here!</h4></a>
                            </form>

                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->


       <script>
            $(document).ready(function() {
                $('#regsubmit').addClass("disabled");
                $('#uname1').keyup(function() {
                    var txt = $(this).val();
                        
                        if (txt=='')
                        {
                            $('#userfeedb').html('Please enter user name!');
                            $('#regsubmit').addClass("disabled");
                        }
                        else
                        {
                            // console.log(txt);
                            $('#userfeedb').html('Searching...');
                            $.ajax({
                                url:"check.php",
                                method:"post",
                                data:{search:txt},
                                dataType:"text",
                                success:function(data)
                                {

                                    $('#userfeedb').html(data);
                                    
                                    if (data == "<font color='green'>User name is free!</font>") 
                                        { $('#regsubmit').removeClass("disabled"); } 

                                    if (data == "<font color='red'>User name must be at least 6 charachers long!</font>") { $('#regsubmit').addClass("disabled"); }

                                }
                            });
                        }

                });
            });

        </script>

<?php

if (isset($_POST['userregistration'])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel-o-matic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
} else {

    $user = $_POST['uname1'];
    $orpass = $_POST['pwd1'];
    $pass = hash('sha256', $orpass);
    $regimage = $_POST['regimage'];
    $type = 'user';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->query("INSERT INTO users (username, password, type, image) VALUES ('$user', '$pass', '$type', '$regimage')")) 
    {
        ?> <script> $('#userfeedb').html("<font color='green'>User is successfully registered. Log in now!</font>") </script> <?php
       } else { echo "Error: " . "<br>" . $conn->error; }

    mysqli_close($conn);

    } 
} 

} // end of if there is no session