<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Accountant</title>
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
<div >
<table width="300" border="10" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="accountantDATA.php">
<td>
<table width="100%" border="0" cellpading="3" cellspacing="1">
<tr>
<td colspan="3"><strong>ACCOUNTANT</strong></td>
</tr>
<tr>
<td width="78">Name</td>
<td width="6">:</td>
<td width="294"><input name="name" type="text" ></td>
</tr>
<tr>
<td width="78">ACCOUNTANT ID</td>
<td width="6">:</td>
<td width="294"><input name="accountantId" type="text" id="accountantId"></td>

</tr>

<tr>
<td width="78">EMAIL</td>
<td width="6">:</td>
<td width="294"><input name="ptName" type="text" ></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="SUBMIT"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>

</body>
</html>
