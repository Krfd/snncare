<?php 

include "conn.php";

// login
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$pass'");
    $recheck = mysqli_num_rows($check);

    if($recheck != 1) {
        ?>
        <script>
            alert("Invalid Email or Password!");
            window.location.href = "user.html";
        </script>
        <?php
    } else {
        session_start();
        $_SESSION['user'] = $email;
        ?>
        <script>
            alert("Login Successful!");
            window.location.href = "user_home.php";
        </script>
        <?php
    }
}

// Register
if(isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $confirm = $_POST['confirm'];   

    if($pass == $confirm) {
        $check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$pass'");
        $recheck = mysqli_num_rows($check);

        if($recheck >= 1) {
            ?>
            <script>
                alert("Email or Password is already taken!");
                window.location.href = "user.html";
            </script>
            <?php
        } else {
            $insert = mysqli_query($conn, "INSERT INTO user VALUES('0', '$firstname', '$lastname', '$email', '$phone', '$pass')");

            if($insert == TRUE) {
                ?>
                <script>
                    alert("Successfully Registered!");
                    window.location.href = "user.html";
                </script>
                <?php
            }
        }
    } else {
        ?>
        <script>
            alert("Password Mismatch!");
            window.location.href = "user.html";
        </script>
        <?php
    } 
}
// end of register

?>