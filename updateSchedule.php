<?php

include "conn.php";

if(isset($_GET['editid'])) {
$id = $_GET['editid'];
$query = "SELECT * FROM schedule WHERE id = $id";
$run = mysqli_query($conn, $query);
if($run) {
    while($row = mysqli_fetch_array($run)) {
    $id = $row['id'];
    $last_name = $row['lastname'];
    $first_name = $row['firstname'];
    $sex = $row['sex'];
    $age = $row['age'];
    $con = $row['con'];
    $stat = $row['status'];
    $date = $row['date'];
    $time = $row['time'];

        if(isset($_POST['update'])) {

            include "conn.php";

            $lastname = $_POST['lname'];
            $firstname = $_POST['fname'];
            $sex = $_POST['sex'];
            $age = $_POST['age'];
            $con = $_POST['con'];
            $stat = $_POST['status'];
            $date = $_POST['date'];
            $time = $_POST['time'];

            $update = ("UPDATE schedule SET lastname = '$lastname', firstname = '$firstname', sex = '$sex', age = '$age', con = '$con', status = '$stat', date = '$date', time = '$time' WHERE id = $id");
            $set = mysqli_query($conn, $update);

            if($set) {
                ?>
                <script>
                    alert("Updated Successfully");
                    window.location.href = "schedule.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Update failed. Please try again.");
                    window.location.href = "schedule.php";
                </script>
                <?php
                }
            }
        }
    }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Schedule</title>

    <!-- icon -->
        <link rel="icon" type="icon" href="logo/SNNCARE.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,200;1,400&display=swap"
            rel="stylesheet"
        />

        <!-- Bootstrap -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />

        <!-- JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>

        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        />

        <!-- Bootstrap CSS --> 
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            .form-field {
                display: block;
                margin: 50px auto;
            }
            .form-field h1 {
                font-weight: bold;
                font-size: 4rem;
            }
            .form-control {
                margin: 5px auto;
            }
            .form-control:focus {
                box-shadow: none;
            }
        </style>
</head>
<body>
    <div class="container form-field">
        <h1>Update Record</h1>
        <br>    
    <form method="post" class="form">
        <fieldset>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required maxlength="150" autocomplete="off" value='<?php echo $last_name; ?>'>
                        <label for="lname">Last Name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required maxlength="150" autocomplete="off" value='<?php echo $first_name; ?>'>
                        <label for="fname">First Name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="sex" class="form-control" placeholder="Sex" required maxlength="6" autocomplete="off" value="<?php echo $sex; ?>">
                        <label for="sex">Sex</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="number" name="age" class="form-control" placeholder="Age" required max="150" autocomplete="off" value="<?php echo $age; ?>">
                        <label for="age">Age</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="con" class="form-control" placeholder="Condition" required maxlength="150" autocomplete="off" value="<?php echo $con; ?>">
                        <label for="con">Condition</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="status" class="form-control" placeholder="Status" required maxlength="150" autocomplete="off" value="<?php echo $stat; ?>">
                        <label for="status">Status</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <input type="date" name="date" class="form-control" placeholder="Date" required autocomplete="off" value="<?php echo $date; ?>">
                        <label for="date">Date</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="time" name="time" class="form-control" placeholder="Time" required autocomplete="off" value="<?php echo $time; ?>">
                        <label for="time">Time</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-primary w-100" onclick="window.location.href = 'schedule.php'">Cancel</button>
                </div>
                <div class="col">
                    <button type="submit" name="update" class="btn btn-dark submit w-100">Update</button>
                </div>
            </div>
        </fieldset>
    </form>
    </div>
</body>
</html>