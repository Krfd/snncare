<?php
include "conn.php";

// login
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM register WHERE email='$email' AND password='$password'");
    $check = mysqli_num_rows($query);

    if($check != 1) {
        ?>
        <script>
            alert("Login Failed");
            window.location.href = "admin_login.html";
        </script>
        <?php
    } else {
        session_start();
        $_SESSION['register'] = $email;
        ?>
        <script>
            alert("Login Success");
            window.location.href = "home.php";
        </script>
        <?php
    }
}
// end of login

// Register
if(isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $confirm = $_POST['confirm'];

    $doc_type = "Document";
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('png', 'jpg', 'jpeg', 'gif', 'wepb', 'pdf');

    if($confirm == $pass) {
        $check = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email' AND password = '$pass'");
        $recheck = mysqli_num_rows($check);
        if($recheck != 1) {
            if(in_array($fileActualExt, $allowed)) {
                $profile = $fileName;
                $fileStorage = 'profiles/documents/'.$profile;

                $insert = mysqli_query($conn, "INSERT INTO register VALUES('0', '$fname', '$email', '$country', '$address', '$phone', '$pass', '$profile')");
                if($insert == TRUE) {
                    move_uploaded_file($fileTmpName, $fileStorage);
                    ?>
                    <script>
                        alert("Registration Complete!");
                        window.location.href = "admin_login.html";
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Invalid File Type.\nPlease upload a valid file");
                        window.location.href = "register.html";
                    </script>
                    <?php
                }
            }
        } else {
            ?>
            <script>
                alert("Password already taken.\nPlease try another.");
                window.location.href = "register.html";
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Unmatched Password.\nPlease try again.");
            window.location.href = "register.html";
        </script>
        <?php
    }
}
// end of register

?>