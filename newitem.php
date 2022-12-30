<?php
require_once('connect.php');
session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Add Item</title>
    <link rel="stylesheet" type="text/css" href="admin.css">

  </head>
  <div class="header">
    <div class="logoWrapper">
      <div class="topnav">
        <a href="management.php">Home</a>
      </div>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">
<!-- if(isset($_SESSION['userStatus']) && (($_SESSION['userStatus']=="STAFF") || ($_SESSION['userStatus']=="ADMIN"))){ -->
    <?php
      if(isset($_SESSION['memberUserId']) ){
        $memberId=$_SESSION['memberId'];
    ?>
    <div class="boxWrapper">


      

    </div>
    <?php }
      else {
        ?>
    

    <form action="additem.php" method="post">
        <center>
        <label for="name">Item name</label><br>
  <input type="text" id="name" name="name"style="width: 10%;"><br>
  <label for="Price">Price:</label><br>
  <input type="number" id="number" name="number" min="0"><br><br>
  <button type="submit" value="submit" class="staff" name="newitem">Submit</button>
        </center>
  
</form> 

          </div>


      </div>
  <?php  } ?>

    </div>
  </div>
  <?php
    // if(isset($_POST['newitem']))
    // {
    //     $sql="INSERT INTO item VALUES('$_POST[name]','$_POST[number]') ;";
    //     $result=$mysqli->query($sql);

    // }
    // ?>
  
  </body>

</html>
