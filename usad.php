<?php
include 'header.php';
?>
<div id="main-content">

    <form class="post-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" id="form">
        <div class="form-group">
            <label>Roll Number</label>
            <input type="text" name="oroll">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="udate" />
        </div>
        <input style="width:100px; margin:auto;" class="submit" type="submit" value="SHOW" name="show" />
    </form>
    <?php
    if (isset($_POST['show'])) {
        $conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
        $storoll = $_POST['oroll'];
        $stdate = $_POST['udate'];
        $sql = "SELECT * FROM st_$storoll WHERE sada='$stdate'";
        $result = mysqli_query($conn, $sql) or die("Query Un");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    ?>

                <form class="post-form" method="post" action="usad1.php" id="form" style="margin-top:25px;">
                    <div class="form-group">
                        <label>Roll Number</label>
                        <input type="hidden" name="oroll" value="<?php echo $storoll; ?>">
                        <input type="text" name="roll" value="<?php echo $storoll; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="udate" value="<?php echo $row['sada']; ?>" />
                    </div>
                    <label>Attendance Status: </label>
                    <label style="font-weight:700"><?php echo $row['satst']; ?></label>

                    <input type="radio" name="atsta" value="Present" style="margin: auto;"> Present
                    <input type="radio" name="atsta" value="Absent" style="margin: auto;">Absent <br><br>
                    <input style="width:100px; margin:auto;" class="submit" type="submit" value="Update" name="up" />
                </form>
    <?php
            }
        }
    }
    ?>

</div>