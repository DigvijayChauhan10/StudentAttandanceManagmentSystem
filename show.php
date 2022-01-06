<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Show Attendance</h2>
    <button id="bu1" onclick="function1()" style="margin-left: 350px;">SHOW STUDENT ATTENDANCE</button>
    <button id="bu2" onclick="function2()">SHOW CLASS ATTENDANCE</button>

    <form class="post-form" method="post" action="ssa.php" id="form" style="margin-top:25px;">
        <div class="form-group">
            <label>Roll Number</label>
            <input type="text" name="roll">

        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="udate" />

        </div>

        <input style="width:100px; margin:auto;" class="submit" type="submit" value="SHOW" />
    </form>

    <form class="post-form" method="post" action="sca.php" id="form2" style="margin-top:25px;">

        <div class="form-group">
            <label>Date</label>
            <input type="date" name="udate" />
        </div>
        <input style="width:100px; margin:auto;" class="submit" type="submit" value="SHOW" />
    </form>

</div>
</div>
<script type="text/javascript">
    var x = document.getElementById("form");
    var y = document.getElementById("form2");
    var co1 = document.getElementById("bu1");
    var co2 = document.getElementById("bu2");

    x.style.display = "none";
    y.style.display = "none";

    function function1() {
        co1.style.backgroundColor = "#3475ca";
        co1.style.color = "#fff";

        co2.style.backgroundColor = "darkgrey";
        co2.style.color = "black";


        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
            y.style.display = "none";
        }
    }

    function function2() {
        co2.style.backgroundColor = "#3475ca";
        co2.style.color = "#fff";

        co1.style.backgroundColor = "darkgrey";
        co1.style.color = "black";


        if (y.style.display === "block") {
            y.style.display = "none";
        } else {
            y.style.display = "block";
            x.style.display = "none";
        }
    }
</script>

</body>

</html>

