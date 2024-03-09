<?php
session_start();
session_destroy();

include 'conn.php';

?>
<script>
    alert("You are Now Leaving the Page!\nThank you!");
    window.location.href="admin_login.html";
</script>