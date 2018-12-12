<?php
require_once 'DB_Connection.php';

if(isset($_POST['submit'])){

	$projectId = $_POST['projectId'];
	$projectBudget = $_POST['projectBudget'];
  $labourCost = $_POST['labourCost'];
  $totalAd = $_POST['totalAd'];
  $InsuranceCost = $_POST['InsuranceCost'];

  $sql = 'INSERT INTO BUDGET SET Project_Id =:projectId,Project_Budget =:ProjectBudget,
    Labour_Cost =:labourCost,Total_AD_Cost =:totalAd,Insurance_Cost =:InsuranceCost' ;

    $query = $db ->prepare($sql);
    $query->execute(array('projectId' => $projectId, ':ProjectBudget' => $projectBudget, ':labourCost' => $labourCost, 'totalAd' => $totalAd, 'InsuranceCost' => $InsuranceCost));

      if ($query) {

          echo "Data Inserted Successully";
        

      } else {

          echo "Couldn't Insert Data";;
          
      }
}
?>
