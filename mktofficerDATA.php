<?php
require_once 'DB_Connection.php';

if(isset($_POST['submit'])){

	$name = $_POST['name'];
  $officerId = $_POST['officerId'];
  $bcost = $_POST['bcost'];
  $totaladcost = $_POST['totaladcost'];

  $sql = 'INSERT INTO MKT_OFFICER SET NAME =:name,Officer_Id =:officerId,
    Billboard_Cost =:bcost,Total_Ad_Cost =:totaladcost';
    $query = $db ->prepare($sql);
    $query->execute(array('name' => $name, ':officerId' => $officerId, ':bcost' => $bcost, 'totaladcost' => $totaladcost));

      if ($query) {

          echo "Data Inserted Successully";
          
      } else {

          echo "Couldn't Insert Data";;
           
      }
}
?>
