<?php 

include "conn.php";

if(isset($_POST['update'])) {
    $current_lname = $_POST['lname'];
    $current_fname = $_POST['fname'];
    $current_sex = $_POST['sex'];
    $current_age = $_POST['age'];
    $current_con = $_POST['con'];
    $current_stat = $_POST['stat'];

    $new_lname = $_POST['new_lname'];
    $new_fname = $_POST['new_fname'];
    $new_sex = $_POST['new_sex'];
    $new_age = $_POST['new_age'];
    $new_con = $_POST['new_con'];
    $new_stat = $_POST['new_stat'];

    $query = mysqli_query($conn, "SELECT * FROM records WHERE lastname = '$current_lname' AND firstname = '$current_fname'");
    $fetch_query = mysqli_num_rows($query);

    if($fetch_query != 1) {
        ?>
        <script>
            alert("Current records not found!");
            window.location.href = "user_records.php";
        </script>
        <?php
    } else {
        $insert = mysqli_query($conn, "INSERT INTO req_update VALUES('0', '$current_lname', '$current_fname', '$current_sex', '$current_age', '$current_con', '$current_stat', '$new_lname', '$new_fname', '$new_sex', '$new_age', '$new_con', '$new_stat')");

        if($insert == TRUE) {
            ?>
            <script>
                alert("Request Sent!\nIt will take a moment to update your record.");
                window.location.href = "user_records.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Request Failed!\nPlease try again.");
                window.location.href = "user_records.php";
            </script>
            <?php
        }
    }
}

?>