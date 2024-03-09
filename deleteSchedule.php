<?php

include "conn.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $search = "DELETE FROM schedule WHERE id = '$id'";
    $delete = mysqli_query($conn, $search);
    ?>
    <script>
        alert("Schedule deleted.");
        window.location.href = "schedule.php";
    </script>
    <?php
}

?>