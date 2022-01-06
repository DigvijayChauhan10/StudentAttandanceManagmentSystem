<?php
include 'header.php';
?>
<div id="main-content">

    <form class="post-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" id="form">
        <div class="form-group">
            <label>Old Roll Number</label>
            <input type="text" name="oroll">
        </div>
        <input style="width:100px; margin:auto;" class="submit" type="submit" value="SHOW" name="show" />
    </form>
    <?php
    if (isset($_POST['show'])) {
        $conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
        $storoll = $_POST['oroll'];
        $sql = "SELECT * FROM main WHERE sroll='$storoll'";
        $result = mysqli_query($conn, $sql) or die("Query Un");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    ?>

                <form class="post-form" method="post" action="uspd1.php" id="form" style="margin-top:25px;">
                    <div class="form-group">
                        <label>Roll Number</label>
                        <input type="hidden" name="oroll" value="<?php echo $row['sroll']; ?>">
                        <input type="text" name="roll" value="<?php echo $row['sroll']; ?>" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $row['sname']; ?>" />

                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="eadd" value="<?php echo $row['semail']; ?>" />

                    </div>
                    <input style="width:100px; margin:auto;" class="submit" type="submit" value="Update" name="up" />
                </form>
    <?php
            }
        }
    }
    ?>
    
</div>