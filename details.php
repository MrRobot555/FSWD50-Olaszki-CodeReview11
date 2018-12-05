<?php
ob_start();
session_start();

if (isset($_SESSION['username']) != '') {

//autherntication should be checked here !

include_once 'head.php';
include_once 'header_ad.php';

if($_GET['id']) {

  require_once 'connect.php';
  include_once 'scripts.php';

    $id = $_GET['id'];
    $table = $_GET['table'];

    $sql = "SELECT * FROM {$table} WHERE id = {$id}";

    //echo $sql;

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

    $conn->close();

    // print_r($data);

?>

<style>
  body {
      background-image: url("https://www.kalory.co.uk/wp-content/uploads/2017/03/red-carpet-event-photographer.jpg");
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
  }

/*  div {
    border: 1px solid red!important;
  } */
  
  .vcenter {
    display: flex;
    align-items: center;
    height: 98vh;
    justify-content: center;
  }

  .formattrib {
    padding: 20px;
    background: rgba(200, 54, 54, 0.7);
    border-radius: 15px;
    min-width: 430px;
  }

  .bottmarg {
    padding-bottom: 1vw;
    color: white;
    letter-spacing: 5px;
    font-weight: bold;
    font-size: 2vw;
  }

  .mybutt {
    font-size: 1.3vw;
    margin-top: 1vw!important;
    border-radius: 15px;
    letter-spacing: 5px;
    font-weight: bold;
  }

  .respwidth {
    width: 22vw;
    min-width: 200px;
  }

  .contflex {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .datafield {
    font-size : 1.5vw;
    line-height: 1.4;
  }

</style>

<div class="container text-white">
  <div class="col-12 vcenter">
    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 formattrib">
      <h3 class="text-center bottmarg"><?php echo(strtoupper($table)); ?> DETAILS</h3>
      <div class="row">
      <div class="col-6">
        <img src="<?php echo($data['image']); ?>" class="respwidth">
      </div>
      <div class="col-6 contflex">
      <?php if ($table=='locations' || $table=='restaurants') {
        ?>
        <div class="datafield">
          Name: <?php echo($data['name']); ?>
        </div>
        <div class="datafield">
          Address: <?php echo($data['city'].' '); echo($data['ZIP']); ?>
        </div>
        <div class="datafield"> 
          <?php echo($data['address']); ?>
        </div>
      <?php }
      ?>

      <?php if ($table=='restaurants') {
        ?>
        <div class="datafield">
          Phone: <?php echo($data['phone']); ?>
        </div> 
        <div class="datafield">
          Type of food: <?php echo($data['type']); ?>
        </div>
        <div class="datafield">
          Web: <?php echo($data['weblink']); ?>
        </div>
       <?php }
      ?>

      <?php if ($table=='events') {
        ?>
        <div class="datafield">
          Author: <?php echo($data['author']); ?>
        </div>
        <div class="datafield">
          Location: <?php echo($data['location']); ?>
        </div>
        <div class="datafield">
          City: <?php echo($data['city']); ?>
        </div>
        <div class="datafield">
          ZIP: <?php echo($data['ZIP']); ?>
        </div>
        <div class="datafield">
          Date: <?php echo($data['date']); ?>
        </div>
        <div class="datafield">
          Time: <?php echo($data['time']); ?>
        </div>
        <div class="datafield">
          Price: <?php echo($data['price']); ?>€
        </div>
       <?php }
      ?>
         
      </div>
      </div> <!-- row -->
      <button type="submit" class="btn btn-primary btn-block mybutt" onclick="location.href='index.php';">BACK</button>
    </div>
  </div>
</div>


<?php 

include_once 'footer.php';


} // else there was no parameters sent

} else {
  header("Location: index.php");
}
?>