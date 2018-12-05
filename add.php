<?php
ob_start();
session_start();

?>

<?php  include_once 'head.php';?>
<?php include_once 'scripts.php';?>

<body>

  <?php if (isset($_SESSION['username']) != '' && $_SESSION['type'] == 'admin') { 

    include_once 'header_ad.php';
    include_once 'scripts.php';

  ?>
    <style>
      body {
          background: #343A40;
      }


      .vcenter {
          display: flex;
          align-items: center;
          height: 92vh;
          justify-content: center;
      }


      .formattrib {
          padding: 20px;
          background: rgba(200, 54, 54, 0.5);
          border-radius: 15px;
          min-width: 30vw;
      }

      .bottmarg {
          padding-bottom: 1vw;
          color: white;
          letter-spacing: 5px;
          font-weight: bold;
          font-size: 2vw;
      }

      .buttoncontainer {
          display: flex;
          flex-direction: column;
      }

      .mybutt {
          font-size: 1.3vw;
          margin-top: 1vw!important;
          border-radius: 15px;
          letter-spacing: 5px;
          font-weight: bold;
      }

    </style>

 <div class="container text-white">
  <div class="col-12 vcenter">
    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 formattrib">
      <h3 class="text-center bottmarg">CHOOSE CATEGORY</h3>

          <div class="buttoncontainer">   

            <a href='edit.php?action=add&table=locations&id=1' class="btn btn-outline-light mybutt">LOCATIONS</a>
              
            <a href='edit.php?action=add&table=restaurants&id=1' class="btn btn-outline-light mybutt">RESTAURANTS</a>

            <a href='edit.php?action=add&table=events&id=1' class="btn btn-outline-light mybutt">EVENTS</a>
          
          </div>

    </div>
  </div>
</div>

  <?php






  } else {


  }


?>
</body>

</html>
