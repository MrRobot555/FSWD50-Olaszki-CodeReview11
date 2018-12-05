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
        margin-top: 15%;
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
            <h2 class="text-center py-3">Please log in</h2>
            <div class="row">
                <div class="col-md-12 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">

                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" text-dark action="index.php" method="POST">
                                <div class="form-group">
                                    <label for="uname1" class="text-body">Username</label>
                                    <input type="text" class="form-control form-control-lg myinp" name="uname1" id="uname1" required="">
                                    <div id="userfeedb"></div>
                                </div>
                                <div class="form-group text-body">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg myinp" id="pwd1" name="pwd1" required="" autocomplete="new-password">
                                    <div id="passfeedb"></div>
                                </div>
<!--                                 <div>
                                    <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description small text-dark">Remember me on this computer</span>
                                    </label>
                                </div> -->
                                <button type="submit" name="submit_butt" id="submit" class="btn btn-primary btn-block mybspace">LOGIN</button>
                                 <a href="register.php"><h4 class="text-center">new to Travel-O-Matic? Register here!</h4></a>
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


<?php

if (isset($_POST['submit_butt'])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "travel-o-matic";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
   

$user = $_POST['uname1'];
$pass = hash('sha256', $_POST['pwd1']);

$query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
        

if  ($row['username']==$user && $row['password'] == $pass && $row['type'] == 'admin') {

  session_start(admin);
  $_SESSION['username'] = $user;
  $_SESSION['type'] = 'admin';
  header("Location: index.php");

  } elseif ($row['username']==$user && $row['password'] == $pass && $row['type'] == 'user') {

  session_start(user);
  $_SESSION['username'] = $user;
  $_SESSION['type'] = 'user';
  header("Location: index.php");
}

} else {
    ?><script>$("#userfeedb").html("<font color='red'>No such user name and password!</font>"); </script><?php
}

}
}