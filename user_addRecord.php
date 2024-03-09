<?php

include "conn.php";

if(isset($_POST['submit'])) {
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $condition = $_POST['con'];
    $stat = $_POST['stat'];

    $check = mysqli_query($conn, "SELECT * FROM add_record WHERE lastname = '$lname' AND firstname = '$fname'");
    $double_check = mysqli_num_rows($check);

    if($double_check > 1) {
        ?>
        <script>
            alert("Record already exist.");
            window.location.href = "user_home.php";
        </script>
        <?php
    } else {
        $push = mysqli_query($conn, "INSERT INTO add_record VALUES('0', '$lname', '$fname', '$sex', '$age', '$condition', '$stat')");
        if($push) {
            ?>
            <script>
                alert("Request Sent!");
                window.location.href = "user_home.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Invalid Request!");
                window.location.href = "user_home.php";
            </script>
            <?php
        }
    }
}


?>