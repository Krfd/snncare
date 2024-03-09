<?php

include "conn.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $search = "DELETE FROM records WHERE id = '$id'";
    $delete = mysqli_query($conn, $search);
    ?>
    <script>
        alert("Record deleted.");
        window.location.href = "records.php";
    </script>
    <?php
}

?>