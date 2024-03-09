<?php

include "conn.php";

if(isset($_POST['submit'])) {
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $condition = $_POST['con'];
    $stat = $_POST['stat'];

    $query = mysqli_query($conn, "SELECT * FROM add_record WHERE lastname = '$lname' AND firstname = '$fname'");
    $fetch_query = mysqli_num_rows($query);

    if($fetch_query >= 1) {

        $check = mysqli_query($conn, "SELECT * FROM records WHERE lastname = '$lname' AND firstname = '$fname'");
        $double_check = mysqli_num_rows($check);

        if($double_check > 1) {
            ?>
            <script>
                alert("Record already exist.");
                window.location.href = "records.php";
            </script>
            <?php
        } else {
            $push = mysqli_query($conn, "INSERT INTO records VALUES('0', '$lname', '$fname', '$sex', '$age', '$condition', '$stat')");
            if($push) {
                ?>
                <script>
                    alert("Record added.");
                    window.location.href = "records.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Error.");
                    window.location.href = "records.php";
                </script>
                <?php
            }
        }
    } else {
        ?>
        <script>
            alert("Request not found!");
            window.location.href = "records.php";
        </script>
        <?php
    }
}


?>