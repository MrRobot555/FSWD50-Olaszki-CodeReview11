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

function success($a) {
    if ($a == 'add') {$message='Added';} else {$message='Updated';}
         ?>
            <div class="flexcont">

                <div>
                
                  <h1 class="text-white">Succcessfully <?php echo($message); ?></h1>
                  <a href='index.php'><button type='button' class="btn btn-primary btn-block mybutt">OK</button></a>

                </div>
                
            </div>
        <?php
}


?>


<?php

$table = $_GET['table'];
$postaction = $_GET['action'];



if ($table=='locations') {

    $name = $_POST['name'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $address = $_POST['address'];
    $image = $_POST['image'];
    $id = $_POST['id'];

    require_once 'connect.php';

    if ($postaction == 'edit') {

     $sql = "UPDATE $table SET name = '$name', city = '$city', ZIP = '$zip', address = '$address', image = '$image' WHERE id = {$id}";

     } else {

     $sql = "INSERT INTO $table (name, city, ZIP, address, image) VALUES ('$name', '$city', '$zip', '$address', '$image')";

     }


    if($conn->query($sql) === TRUE) {

        success($postaction);

    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $conn->close();
 
    }





if ($table=='restaurants') {

    $name = $_POST['name'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $address = $_POST['address'];
    $image = $_POST['image'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];
    $weblink = $_POST['weblink'];
    $id = $_POST['id'];

    require_once 'connect.php';

    if ($postaction == 'edit') {

     $sql = "UPDATE $table SET name = '$name', city = '$city', ZIP = '$zip', address = '$address', image = '$image', phone = '$phone', type = '$type', weblink = '$weblink' WHERE id = {$id}";

    } else {

     $sql = "INSERT INTO $table (name, city, ZIP, address, image, phone, type, weblink) VALUES ('$name', '$city', '$zip', '$address', '$image', '$phone', '$type', '$weblink')";

    }


    if($conn->query($sql) === TRUE) {

        success($postaction);

    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $conn->close();
 
    }



if ($table=='events') {

  
    $author = $_POST['author'];
    $city = $_POST['city'];
    $ZIP = $_POST['ZIP'];
    $location = $_POST['location'];
    $image = $_POST['image'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $price = $_POST['price'];
    $id = $_POST['id'];


    require_once 'connect.php';

    if ($postaction == 'edit') {

     $sql = "UPDATE $table SET author = '$author', city = '$city', ZIP = '$ZIP', location = '$location', image = '$image', date = '$date', time = '$time', price = '$price' WHERE id = {$id}";

    } else {

     $sql = "INSERT INTO $table (author, city, ZIP, location, image, date, time, price) VALUES ('$author', '$city', '$ZIP', '$location', '$image', '$date', '$time', '$price')";

    }


    if($conn->query($sql) === TRUE) {

        success($postaction);

    } else {
        echo "Erorr while updating record : ". $connect->error;
    }


    $conn->close();
 
    }

}

?>
