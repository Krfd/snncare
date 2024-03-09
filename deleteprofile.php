<?php 

include "conn.php";

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $delete = "DELETE FROM register WHERE id = $id";
    $verify = mysqli_query($conn, $delete);

    if($verify == TRUE) {
        ?>
        <script>
            alert("Admin deleted.");
            window.location.href = "logout.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Error.");
            window.location.href = "logout.php";
        </script>
        <?php
    }
}
?>

