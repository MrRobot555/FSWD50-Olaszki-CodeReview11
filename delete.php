<?php
ob_start();
session_start();

if (isset($_SESSION['username']) != '' && $_SESSION['type'] == 'admin') {

//autherntication should be checked here !

include_once 'head.php';
include_once 'header_ad.php';


?>

<style>

    body {
        background: #343A40;
    }

    .flexcont {
        display: flex;
        height: 93vh;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .mybutt {
        font-size: 1.3vw;
        margin-top: 1vw!important;
        border-radius: 15px;
        letter-spacing: 5px;
        font-weight: bold;
    }

</style>

<?php

function success() {
         ?>
            <div class="flexcont">

                <div>
                
                  <h1 class="text-white">Succcessfully Deleted</h1>
                  <a href='index.php'><button type='button' class="btn btn-primary btn-block mybutt">OK</button></a>

                </div>
                
            </div>
        <?php
}


?>


<?php

$id = $_GET['id'];
$mytable = $_GET['table'];

    require_once 'connect.php';


     $sql = "DELETE FROM $mytable WHERE id = {$id}";

    if($conn->query($sql) === TRUE) {

        success();

    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $conn->close();
 

    }

?>
