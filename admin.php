<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>

<style>
body{
background:#020617;
color:white;
font-family:Poppins;
padding:40px;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
border:1px solid #38bdf8;
padding:10px;
text-align:left;
}

th{
background:#1e293b;
color:#38bdf8;
}
</style>

</head>

<body>

<h2>Contact Messages</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
</tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM contact ORDER BY id DESC");

while($row = mysqli_fetch_assoc($result)){
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['message']."</td>";
  echo "</tr>";
}

?>

</table>

</body>
</html>
