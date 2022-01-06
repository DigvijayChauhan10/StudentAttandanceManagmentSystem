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

        <h2>All Student Records</h2>
        <table cellpadding="7px">
            <thead>
                <th>Roll No</th>
                <th>Name</th>
                <th>Email Id</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <tr>
                        <td><?php echo $row['sroll'] ?></td>
                        <td><?php echo $row['sname'] ?></td>
                        <td><?php echo $row['semail'] ?></td>
                        <td>
                            <a href='update.php'>Edit</a>
                            <a href='delete.php'>Delete</a>
                        </td>
                    <?php

                }
                    ?>

                    </tr>
            </tbody>
        </table>
    <?php
    }
    ?>

</div>
</div>
</body>

</html>