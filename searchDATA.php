<!DOCTYPE html>
<html>
<head>
<title>Search Result</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<ul>
  <li><a class="active" href="adminpage.php">Home</a></li>
  <li><a href="search.php">SEARCH</a></li>
  <li><a href="projectcreation.php">CREATE PROJECT</a></li>
  <li><a href="budget.php">BUDGET</a></li>
  <li><a href="customer.php">CUSTOMER INFO</a></li>
  <li><a href="employee.php">EMPLOYEE INFO</a></li>
  <li><a href="projectmanager.php">PROJECT MANAGER</a></li>
  <li><a href="mktofficer.php">MKT OFFICER</a></li>
  <li><a href="accountant.php">ACCOUNTANT</a></li>
  <li><a href="indexaslogin.php">QUIT</a></li>
</ul>
<div >
<p>JATI Real Estate Firm Database Management System</p>
</div>
<div id="search-form">
<form name="form1" method="post" action="searchDATA.php">
<table align="center" width="30%" border="0">
<tr>
<td>
  <h1>Select Database</h1>
    <select name="DatabaseName">
     <option value="1">PROJECT_CREATION</option>
     <option value="2">BUDGET</option>
     <option value="3">CUSTOMER</option>
     <option value="4">EMPLOYEE</option>
     <option value="5">PROJECT_MANAGER</option>
     <option value="6">MKT_OFFICER</option>
     <option value="7">ACCOUNTANT</option>
   </select>
</td>
</tr>
<tr>
<td><button type="submit" name="search">SEARCH</button></td>
</tr>
</table>
</form>
</div>
<table class="center">
<?php
 require_once 'DB_Connection.php';
 if(isset($_POST['search'])){

 $dbname = $_POST['DatabaseName'];
 if ($dbname==1) {
   $dbname="PROJECT_CREATION";
   $sql = "SELECT * FROM $dbname";
   if($result = mysqli_query($conn, $sql)){
       if(mysqli_num_rows($result) > 0){

               echo "<tr>";
                   echo "<th>Project_Name</th>";
                   echo "<th>Project_Id</th>";
                   echo "<th>Project_Location</th>";
                   echo "<th>Estimated_Time</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row['Project_Name'] . "</td>";
                   echo "<td>" . $row['Project_Id'] . "</td>";
                   echo "<td>" . $row['Project_Location'] . "</td>";
                   echo "<td>" . $row['Estimated_Time'] . "</td>";
               echo "</tr>";
           }

           mysqli_free_result($result);
       } else{
           echo "<td>No records found in</br>PROJECT CREATION TABLE.</td>";
       }
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
   
   //------------------------------------------------- Joining -------------------------------------------------
   $smQuery="SELECT project_creation.Project_Name, budget.Project_Id, budget.Project_Budget, project_manager.Manager_Id FROM project_creation ";
   $smQuery.="INNER JOIN budget ON project_creation.Project_Id=budget.Project_Id ";
   $smQuery.="INNER JOIN project_manager ON project_creation.Project_Id=project_manager.Project_Id";
   
   if($result = mysqli_query($conn, $smQuery)){
       if(mysqli_num_rows($result) > 0){

              echo "<h3>Data From JOIN PROJECT_CREATION + BUDGET + PROJECT_MANAGER TABLE</h3>";
               echo "<tr>";
                   echo "<th>Project_Name</th>";
                   echo "<th>Project_Id</th>";
                   echo "<th>Project_Budget</th>";
				   echo "<th>Project_Manger_ID</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row['Project_Name'] . "</td>";
                   echo "<td>" . $row['Project_Id'] . "</td>";
                   echo "<td>" . $row['Project_Budget'] . "</td>";
				   echo "<td>" . $row['Manager_Id'] . "</td>";
               echo "</tr>";
           }

           mysqli_free_result($result);
       } else{
            echo "<td>No records found in</br>BUDGET TABLE or </br>PROJECT_MANAGER TABLE.</td>";
       }
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
 }
 
 //----------------------------------------------------------- Joining END -----------------------------------------------
 
 
 elseif ($dbname==2) {
   $dbname="BUDGET";
   $sql = "SELECT * FROM $dbname";
   if($result = mysqli_query($conn, $sql)){
       if(mysqli_num_rows($result) > 0){

                echo "<h3>Data From BUDGET TABLE</h3>";
               echo "<tr>";
                   echo "<th>Project_Id</th>";
                   echo "<th>Project_Budget</th>";
                   echo "<th>Labour_Cost</th>";
                   echo "<th>Total_AD_Cost</th>";
                   echo "<th>Insurance_Cost</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row['Project_Id'] . "</td>";
                   echo "<td>" . $row['Project_Budget'] . "</td>";
                   echo "<td>" . $row['Labour_Cost'] . "</td>";
                   echo "<td>" . $row['Total_AD_Cost'] . "</td>";
                   echo "<td>" . $row['Insurance_Cost'] . "</td>";
               echo "</tr>";
           }

           mysqli_free_result($result);
       } else{
            echo "<td>No records found in</br>BUDGET TABLE</td>";
       }
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
 }


 elseif ($dbname==3) {
   $dbname="CUSTOMER";
   $sql = "SELECT * FROM $dbname";
   if($result = mysqli_query($conn, $sql)){
       if(mysqli_num_rows($result) > 0){

               echo "<tr>";
                   echo "<th>Customer_Id</th>";
                   echo "<th>Project_id</th>";
                   echo "<th>Project_Location</th>";
                   echo "<th>Project_Name</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row['Customer_Id'] . "</td>";
                   echo "<td>" . $row['Project_id'] . "</td>";
                   echo "<td>" . $row['Project_Location'] . "</td>";
                   echo "<td>" . $row['Project_Name'] . "</td>";
               echo "</tr>";
           }

           mysqli_free_result($result);
       } else{
           echo "<td>No records found in</br>CUSTOMER TABLE</td>";
       }
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }

   //------------------------------------------------- Joining -------------------------------------------------
   $smQuery="SELECT customer.Project_Name, Customer_Id, budget.Project_Id, budget.Project_Budget, project_creation.Project_Name FROM customer ";
   $smQuery.="INNER JOIN budget ON customer.Project_Id=budget.Project_Id ";
   $smQuery.="INNER JOIN project_creation ON customer.Project_Id=project_creation.Project_Id";
   
   if($result = mysqli_query($conn, $smQuery)){
       if(mysqli_num_rows($result) > 0){

              echo "<h3>Data From JOIN PROJECT_CREATION + BUDGET + CUSTOMER</h3>";
               echo "<tr>";
                   echo "<th>Project_Name</th>";
                   echo "<th>Project_Id</th>";
                   echo "<th>Customer_Id</th>";
                   echo "<th>Project_Budget</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row['Project_Name'] . "</td>";
                   echo "<td>" . $row['Project_Id'] . "</td>";
                   echo "<td>" . $row['Customer_Id'] . "</td>";
                   echo "<td>" . $row['Project_Budget'] . "</td>";
               echo "</tr>";
           }

           mysqli_free_result($result);
       } else{
            echo "<td>No records found in</br>BUDGET TABLE or </br>PROJECT_CREATION TABLE.</td>";
       }
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
 }
 
 //----------------------------------------------------------- Joining END -----------------------------------------------

 elseif ($dbname==4) {
   $dbname="EMPLOYEE";
   $sql = "SELECT * FROM $dbname";
   if($result = mysqli_query($conn, $sql)){
       if(mysqli_num_rows($result) > 0){

                echo "<h3>Data From EMPLOYEE TABLE</h3>";
               echo "<tr>";
                   echo "<th>Employee_Id</th>";
                   echo "<th>Employee_Name</th>";
                   echo "<th>Employee_Address</th>";
                   echo "<th>Employee_Salary</th>";
                   echo "<th>Employee_Email</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row['Employee_Id'] . "</td>";
                   echo "<td>" . $row['Employee_Name'] . "</td>";
                   echo "<td>" . $row['Employee_Address'] . "</td>";
                   echo "<td>" . $row['Employee_Salary'] . "</td>";
                   echo "<td>" . $row['Employee_Email'] . "</td>";
               echo "</tr>";
           }

           mysqli_free_result($result);
       } else{
            echo "<td>No records found in</br>EMPLOYEE TABLE.</td>";
       }
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
 }
 elseif ($dbname==5) {
   $dbname="PROJECT_MANAGER";
   $sql = "SELECT * FROM $dbname";
   if($result = mysqli_query($conn, $sql)){
       if(mysqli_num_rows($result) > 0){

                echo "<h3>Data From PROJECT_MANAGER TABLE</h3>";
               echo "<tr>";
                   echo "<th>Project_id</th>";
                   echo "<th>Manager_Id</th>";
                   echo "<th>Email</th>";
                   echo "<th>Project_Name</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row['Project_id'] . "</td>";
                   echo "<td>" . $row['Manager_Id'] . "</td>";
                   echo "<td>" . $row['Email'] . "</td>";
                   echo "<td>" . $row['Project_Name'] . "</td>";
               echo "</tr>";
           }

           mysqli_free_result($result);
       } else{
            echo "<td>No records found in</br>PROJECT_MANAGER TABLE.</td>";
       }
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
 }
 elseif ($dbname==6) {
   $dbname="MKT_OFFICER";
   $sql = "SELECT * FROM $dbname";
   if($result = mysqli_query($conn, $sql)){
       if(mysqli_num_rows($result) > 0){

                echo "<h3>Data From MKT_OFFICER TABLE</h3>";
               echo "<tr>";
                   echo "<th>NAME</th>";
                   echo "<th>Officer_Id</th>";
                   echo "<th>Billboard_Cost</th>";
                   echo "<th>Total_Ad_Cost</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row['NAME'] . "</td>";
                   echo "<td>" . $row['Officer_Id'] . "</td>";
                   echo "<td>" . $row['Billboard_Cost'] . "</td>";
                   echo "<td>" . $row['Total_Ad_Cost'] . "</td>";
               echo "</tr>";
           }

           mysqli_free_result($result);
       } else{
          echo "<td>No records found in</br>MKT_OFFICER TABLE.</td>";
       }
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
 }
 elseif ($dbname==7) {
   $dbname="ACCOUNTANT";
   $sql = "SELECT * FROM $dbname";
   if($result = mysqli_query($conn, $sql)){
       if(mysqli_num_rows($result) > 0){

                echo "<h3>Data From ACCOUNTANT TABLE</h3>";
               echo "<tr>";
                   echo "<th>NAME</th>";
                   echo "<th>Accountant_Id</th>";
                   echo "<th>Email</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
                   echo "<td>" . $row['NAME'] . "</td>";
                   echo "<td>" . $row['Accountant_Id'] . "</td>";
                   echo "<td>" . $row['Email'] . "</td>";
               echo "</tr>";
           }

           mysqli_free_result($result);
       } else{
            echo "<td>No records found in</br>ACCOUNTANT TABLE.</td>";
       }
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
 }
}
?>
</table>
</body>
</html>