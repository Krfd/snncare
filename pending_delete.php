<?php

include "conn.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $search = "DELETE FROM add_record WHERE id = '$id'";
    $delete = mysqli_query($conn, $search);
    ?>
    <script>
        alert("Request deleted.");
        window.location.href = "addRequest.php";
    </script>
    <?php
}

?>