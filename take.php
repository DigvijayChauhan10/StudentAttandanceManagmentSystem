<?php
include 'header.php';
?>
<div id="main-content">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
    $sql = "SELECT * FROM main ORDER BY sroll ASC";
    $result = mysqli_query($conn, $sql) or die("Query Un");
    if (mysqli_num_rows($result) > 0) {
    ?>

        <h2>Take Attendance</h2>
        <form class="post-form" method="post">
            <div class="form-group">
                <input type="date" name="sadate">
            </div>

            <table style="width:100%" cellpadding="7px">
                <thead>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Attendance Status</th>
                </thead>
                <tbody>
                    <?php
                    $i = 0;

                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;
                    ?>

                        <tr>
                            <td><?php echo $row['sroll'] ?></td>
                            <td><?php echo $row['sname'] ?></td>
                            <td>
                                <input type="radio" name="atsta<?php echo $i; ?>" value="Present"> Present
                                <input type="radio" name="atsta<?php echo $i; ?>" value="Absent"> Absent
                            </td>
                        <?php

                    }
                        ?>

                        </tr>
                </tbody>
            </table>
            <input style="margin:0; margin-top:25px;" class="submit" type="submit" value="Submit" name="submit" />
        </form>
    <?php
    }
    ?>

</div>
</div>
</body>

</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
if (isset($_POST["submit"])) {
    $sql = "SELECT * FROM main ORDER BY sroll ASC";
    $result = mysqli_query($conn, $sql) or die("Query Un");
    $nrow=mysqli_num_rows($result);

    for ($i = 1; $i <= $nrow; $i++) {
        $da = $_POST["sadate"];
        if(isset($_POST["atsta$i"]))
        $sats = $_POST["atsta$i"];
        else
        $sats;
        $sql1 = "INSERT INTO st_$i(sada,satst) VALUES ('{$da}','{$sats}')";
        $result1 = mysqli_query($conn, $sql1) or die("Query Un");
    }
}

mysqli_close($conn);

?>