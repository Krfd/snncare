<?php

include "conn.php";

if(isset($_POST['add'])){
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $agenda = $_POST['agenda'];
    $announcement = $_POST['announce'];

    $announce = mysqli_query($conn, "INSERT INTO announcement VALUES('0', '$subject', '$date', '$agenda','$announcement')");
    if($announce == TRUE) {
        ?>
        <script>
            alert("Announcement updated successfully.");
            window.location.href = "profile.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Invalid input. Please try again.");
            window.location.href = "profile.php";
        </script>
        <?php
    }
}

?>