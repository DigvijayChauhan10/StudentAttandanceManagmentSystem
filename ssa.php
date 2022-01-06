<?php
include 'header.php';
?>
<div id="main-content">

<?php
$stroll = $_POST['roll'];
$date = $_POST['udate'];

$conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
if($date==''){
$sql = "SELECT * FROM st_$stroll";
$result = mysqli_query($conn, $sql) or die("Query Un");
}
else{
    
$sql = "SELECT * FROM st_$stroll WHERE sada='$date' ";
$result = mysqli_query($conn, $sql) or die("Query Un");
}
if (mysqli_num_rows($result) > 0) {
    ?>

    <table cellpadding="7px">
            <thead>
                <th>Roll No</th>
                <th>Date</th>
                <th>Attendance Status</th>
            </thead>
            <tbody>
        
      <?php  
    while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>
            <td><?php echo $stroll?></td>
            <td><?php echo $row['sada'] ?></td>
            <td><?php echo $row['satst'] ?></td>

        <?php

    }
        ?>

        </tr>
</tbody>
<a href="show.php"><button>< Back</button></a>

</table>
<?php
}
?>

</div>
</div>

</body>

</html>