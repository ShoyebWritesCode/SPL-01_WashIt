<?php 	require_once('connect.php');
include "server.php";
include "dummy.php";
//session_start();
$count=0;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Order</title>
    <link rel="stylesheet" type="text/css" href="admin.css">

  </head>

  <body>
    <div class="row">
    <div class="content">
      <?php
       //if(isset($_SESSION['userStatus']) && ($_SESSION['userStatus']=="STAFF" || $_SESSION['userStatus']=="ADMIN" ) ){
      ?>
      <div class="boxWrapper high1020">


        <form class="regisForm " id="form" action="checkorder.php" method="post">
          <table  border="0">
            <col width="2%">
            <col width="40%">
            <col width="10%">
            <col width="10%">
            <th>checkbox</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
          <?php
          //echo $_SESSION['firstName'];
          $JSCheckBoxArray = array();
          $JSTexyInputArray = array();

				 	$q="select * from item";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
					}
          while($row=$result->fetch_array()){ ?>
            <tr>
            <?php
            array_push($JSCheckBoxArray,$row['itemName']."CheckBox");
            array_push($JSTexyInputArray,$row['itemName']."Vol");
            ?>

            <td>    <input type="checkbox" id="<?=$row['itemName']."CheckBox"?>" name="<?=$row['itemName']."CheckBox"?>" value="<?=$row['itemName']."IsChecked"?>"></td>
            <td>    <label for="<?=$row['itemName']?>"><?=$row['itemName']?></label></td></td>
            <td>    <label for="<?=$row['price']?>"><?=$row['price']?></label></td></td>
            <td>    <input style="text-align: center" type="number" min=0 id= "<?=$row['itemName']."Vol"?>" class="price" readonly name=<?=$row['itemName']."Vol"?> value=0 ></td>
            
                <br>
              </tr>
              <?php $count++; ?>
				<?php } ?>
      </table>
        <br><br>
        <input type="checkbox" id="haveMemberCheckbox" name="haveMemberCheckbox" required>
        <label for="haveMemberText">Cash On Delivery</label><br>

        <label for="textbox_name">Room No:</label><br>
        <input type="number" id="roomNo" name="roomNo" required><br>

        <input type="hidden" id="memberIdInput" name="memberIdInput" readonly value="">
        <input type="hidden" name="useMember" id="useMember" value="0">

        <div class="regisItemSubmitWrapper padding10">

          <input  type="submit" name="regisItemSubmit" value="Order">
        </div>
        </form>
      </div>
      <?php
   // }else {
     // echo "<h1>NOPERMISSION</h1>";
   // }
    ?>
    </div>
  </body>

  <!-- <script>
    function isValidQuantity() {
      var quantity = document.getElementsByClassName("price")[0].value;
      if(quantity<=0){
        alert("Quantity must be greater than 0.");
      }
    }
  </script> -->

<?php
$script="";
$scriptStart ="<script>";
$scriptStop = "</script>";
for ($i=0; $i <$count ; $i++) {
  $script = $script.$scriptStart."document.getElementById('".$JSCheckBoxArray[$i]."').onchange = function() {document.getElementById('".$JSTexyInputArray[$i]."').readOnly  = !this.checked; document.getElementById('".$JSTexyInputArray[$i]."').value  = '0';};".$scriptStop;
}
echo $script;
echo "<script> document.getElementById('haveMemberCheckbox').onchange = function() {document.getElementById('useMember').value  = '1';document.getElementById('memberIdInput').readOnly  = !this.checked;document.getElementById('memberIdInput').value  = '';};</script>";
 ?>
 </html>
