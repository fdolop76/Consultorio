<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
    
<?php


$con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"crud");
$sql="SELECT * FROM control";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>ID</th>
<th>fecha</th>
<th>beneficiario</th>
<th>salidas</th>
<th>saldo</th>
<th>bancos</th>
<th>tipo</th>
<th>empres</th>
<th>naturaleza</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['fecha'] . "</td>";
    echo "<td>" . $row['beneficiario'] . "</td>";
    echo "<td>" . $row['salidas'] . "</td>";
    echo "<td>" . $row['saldo'] . "</td>";
    echo "<td>" . $row['bancos'] . "</td>";
    echo "<td>" . $row['tipo_mov'] . "</td>";
    echo "<td>" . $row['empresa'] . "</td>";
    echo "<td>" . $row['naturaleza'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>