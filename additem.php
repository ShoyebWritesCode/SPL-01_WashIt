<?php
require_once('connect.php');
session_start();
if (isset($_POST['newitem'])){
?>
  <?php
  $itemname= $_POST['name'];
  $price =  $_POST['number'];
  
        $sql="INSERT INTO `item` (`itemName`,`price`) VALUES ('$itemname','$price')";
        $result=$mysqli->query($sql);

    
    
        header("Refresh: 0; url=newitem.php");




  
}

?>