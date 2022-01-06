<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Detail</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Roll No</label>
            <input type="text" name="roll" />
        </div>
        <input class="submit" type="submit" name="delete" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
<?php

$conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
if (isset($_POST["delete"])) {
    $stroll = $_POST['roll'];
    $sql = "DELETE FROM main WHERE sroll='{$stroll}'";
    $sql2 = "DROP TABLE st_$stroll";
    $result=mysqli_query($conn,$sql) or die();
    $result2=mysqli_query($conn,$sql2) or die("Please Check roll number is wrong");
    header("Location: http://localhost/SAMS/index.php");

}

mysqli_close($conn);
 
?>