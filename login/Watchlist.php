<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Your WatchList</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "login");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$name=$_SESSION['username'];
$sql = "SELECT portfolio FROM users WHERE username='$name'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$game=explode(" ",$row["portfolio"]);
$s=sizeof($game);
for($i=0;$i<$s;$i++){echo "<tr><td>".$game[$i]."</td><td>";}
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>