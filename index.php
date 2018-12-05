<?php
ob_start();
session_start();

$returning = false;
if (isset($_GET['act'])) {$returning = true; $backid = $_GET['act'];}

?>

<?php  include_once 'head.php';?>
<?php  include_once 'scripts.php';?>


<body>
  <?php if (isset($_SESSION['username']) == '') { $sess = false;} ?>

  <?php if (isset($_SESSION['username']) == '') { include_once 'header.php';} ?>

  <?php if (isset($_SESSION['username']) != '' && $_SESSION['type'] == 'user') { include_once 'header_us.php';} ?>

  <?php if (isset($_SESSION['username']) != '' && $_SESSION['type'] == 'admin') { 

      //admin content
    include_once 'header_ad.php';

    include_once 'admincontroller.php';

?>
  <div id='admin_content'> <?php include 'content.php'; ?> </div>

  <div id='user_management'> <?php include 'userman.php'; ?> </div>

<?php if ($returning == false) { ?>
<script>
  $("#user_management").hide();
  $("#admin_content").show();
</script>
<?php } ?>

<?php if ($returning == true) { ?>
<script>
  $("#admin_content").hide();
  $("#user_management").show();
</script>
<?php } ?>


<?php

  } ?>

  <?php if (isset($_SESSION['username']) != '' && $_SESSION['type'] == 'user')

      //user content
  { 
       $sess = true;

       //include_once 'slider.php';

       include 'content.php';

  } else 

      { 

          include_once 'login.php';

      }

  ?>

</body>
<?php include_once 'footer.php'; ?>


</html>
