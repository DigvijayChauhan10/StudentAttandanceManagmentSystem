<?php
include 'header.php';
?>
<div id="main-content">
    <table cellpadding="7px">
        <thead>
            <th>Roll No</th>
            <th>Date</th>
            <th>Attendance Status</th>
        </thead>
        <tbody>
            <?php
            $date = $_POST['udate'];
            $conn = mysqli_connect("localhost", "root", "", "sams") or die("Connection Failed.");
            $sql = "SELECT * FROM main ORDER BY sroll ASC";
            $result = mysqli_query($conn, $sql) or die("Query Un");
            $nrow = mysqli_num_rows($result);

                for ($i = 1; $i <= $nrow; $i++) {

                    $sql1 = "SELECT * FROM st_$i WHERE sada='$date'";
                    $result1 = mysqli_query($conn, $sql1) or die("Query Un");


            ?>
                    <?php
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row1['sada'] ?></td>
                            <td><?php echo $row1['satst'] ?></td>

                        <?php
                    }

                        ?>
                        </tr>

                <?php
                }
            
                ?>

        </tbody>
        <a href="show.php"><button>
                < Back</button> </a> </table> </div> </div> </body> </html>