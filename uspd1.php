<?php
$srl = $_POST['oroll'];
$sro = $_POST['roll'];
$sna = $_POST['name'];
$sem = $_POST['eadd'];
$conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
$sql = "UPDATE main SET sroll='{$sro}', sname='{$sna}', semail='{$sem}' WHERE sroll=$srl";
$result = mysqli_query($conn, $sql) or die("Query Un");
header("Location: http://localhost/SAMS/index.php");
mysqli_close($conn);
?>
