<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Student</h2>
    <form class="post-form" method="post">
        <div class="form-group">
            <label>Roll Number</label>
            <input type="text" name="roll">

        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />

        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="text" name="eadd" />

        </div>
        <input class="submit" type="submit" value="ADD" name="submit" />
    </form>
</div>
</div>
</body>

</html>
<?php

$conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
if (isset($_POST["submit"])) {
    $stroll = $_POST['roll'];
    $stname = $_POST['name'];
    $stea = $_POST['eadd'];
    $sql = "INSERT INTO main(sroll,sname,semail) VALUES ('{$stroll}','{$stname}','{$stea}')";
    $sql2= "CREATE TABLE st_$stroll(sid int NOT NULL AUTO_INCREMENT, sada date, satst varchar(255), PRIMARY KEY (sid))";
    $result=mysqli_query($conn,$sql) or die("Query Un");
    $result2=mysqli_query($conn,$sql2) or die("Query Un2");
    header("Location: http://localhost/SAMS/index.php");

}

mysqli_close($conn);

 
?>