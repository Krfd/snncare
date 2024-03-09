<?php

include "conn.php";

if(isset($_POST['add'])){
    $lastname = $_POST['lname'];
    $firstname = $_POST['fname'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $con = $_POST['con'];
    $stat = $_POST['stat'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $validate = mysqli_query($conn, "SELECT * FROM records WHERE lastname = '$lastname' AND firstname = '$firstname' AND age = '$age'");
    $check = mysqli_num_rows($validate);

    if($check > 1) {
        ?>
        <script>
            alert("Patient already Added.");
            window.location.href = "schedule.php";
        </script>
        <?php
    } else {
        $insert = mysqli_query($conn, "INSERT INTO schedule VALUES('0', '$lastname', '$firstname', '$sex', '$age', '$con', '$stat', '$date', '$time')");

        if($insert == TRUE) {
            ?>
            <script>
                alert("Schedule Added.");
                window.location.href = "schedule.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Patient not found.");
                window.location.href = "schedule.php";
            <?php
        }
    }
}
?>