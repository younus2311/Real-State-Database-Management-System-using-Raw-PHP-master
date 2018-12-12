<!DOCTYPE html>
<html>
<head>
<title>Search</title>
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
</body>
</html>
