<?php
require_once 'DB_Connection.php';

if(isset($_POST['submit'])){

	$projectName = $_POST['projectName'];
	$projectId = $_POST['projectId'];
  $projectLocation = $_POST['projectLocation'];
  $estimatedTime = $_POST['estimatedTime'];

  $sql = 'INSERT INTO PROJECT_CREATION SET Project_Name =:projectName,Project_Id=:projectId,
    Project_Location =:projectLocation,Estimated_Time =:estimatedTime';
    $query = $db ->prepare($sql);
    $query->execute(array('projectName' => $projectName, ':projectId' => $projectId, ':projectLocation' => $projectLocation, 'estimatedTime' => $estimatedTime));

      if ($query) {

          echo "Data Inserted Successully";
          

      } else {

          echo "Couldn't Insert Data";;
      }
}
?>
