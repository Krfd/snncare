<?php

session_start();
include "conn.php";

if(empty($_SESSION['register'])) {
    ?>
    <script>
        alert("Session expired\nPlease login again.");
        window.location.href = "admin_login.html";
    </script>
    <?php
    } else {
        $email = $_SESSION['register'];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SNNCare | Schedule</title>

        <!-- icon -->
        <link rel="icon" type="icon" href="logo/SNNCARE.png" />

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

        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            :root {
                --bs-gray: #6c757d;
                --bs-gray-dark: #343a40;
                --bs-gray-100: #f8f9fa;
                --bs-gray-200: #e9ecef;
                --bs-gray-300: #dee2e6;
                --bs-gray-400: #ced4da;
                --bs-gray-500: #adb5bd;
                --bs-gray-600: #6c757d;
                --bs-gray-700: #495057;
                --bs-gray-800: #343a40;
                --bs-gray-900: #212529;
            }
            body {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                background: var(--bs-gray-200);
            }
            .flex {
                display: flex;
                align-items: center;
            }
            .nav-item .nav-link {
                color: #343a40;
                padding: 5px 20px;
                border-radius: 5px;
            }
            .nav-item .nav-link:hover {
                background: #343a40;
                color: #fff;
            }
            .logo {
                height: auto;
                width: 50px;
                border-radius: 50%;
            }
            .navbar-toggler {
                margin: 0px auto auto 20px;
            }
            .logout {
                float: right;
            }
            .btn:focus {
                box-shadow: none;
            }
            .main-content {
                padding-bottom: 100px;
            }
            .main-title {
                font-weight: bold;
            }
            .form-control {
                margin: 5px auto;
            }
            .form-control:focus {
                box-shadow: none;
            }
            .footer {
                display: block;
                justify-content: center;
                align-items: center;
                text-align: center;
                background: #212529;
                color: #fff;
                padding: 20px;
            }
            .rights {
                font-weight: 300;
            }

        </style>
    </head>
    <body>
        <div class="offcanvas offcanvas-start" id="offcanvas">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title container">
                    SNNCare: Sto. Nino Health Care Center
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"
                ></button>
            </div>
            <div class="offcanvas-body">
                <nav class="container navbar">
                    <ul class="navbar-nav ps-3 w-100">
                        <hr />
                        <li class="nav-item">
                            <a href="home.php" class="nav-link"
                                ><i class="fa-solid fa-house"></i> Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="records.php" class="nav-link"
                                ><i class="fa-solid fa-clipboard"></i>
                                Records</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="requirements.php" class="nav-link"
                                ><i class="fa-sharp fa-solid fa-file"></i>
                                Requirements</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="schedule.php" class="nav-link active"
                                ><i class="fa-solid fa-calendar"></i>
                                Schedule</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="suggestion.php" class="nav-link"
                                ><i class="fa-solid fa-lightbulb"></i>
                                Suggestions</a
                            >
                        </li>
                        <hr />
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link"
                                ><i class="fa-solid fa-user"></i> Profile</a
                            >
                        </li>
                        <li class="nav-item"><a href="reqUpdate.php" class="nav-link"><i class="fa-solid fa-pen-to-square"></i>Update Requests</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container-fluid main-content">
            <div class="container">
                <hr />
                <div class="container-fluid">
                    <img src="logo/SNNCARE.png" alt="Logo" class="logo" />
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas"
                    >
                        <span class="fa-solid fa-bars"></span>
                        Dashboard
                    </button>
                    <button
                        type="button"
                        class="btn btn-dark logout justify-content-end"
                    >
                        <a
                            href="logout.php"
                            style="text-decoration: none; color: #fff"
                            >Log out</a
                        >
                    </button>
                </div>
                <hr />
            </div>
                <div class="container">
                        <div class="header">
                            <h1 class="main-title">
                                Check-up Schedule
                            </h1>
                            <br />
                        </div>
                            <button
                                type="button"
                                class="btn btn-dark"
                                data-bs-toggle="modal"
                                data-bs-target="#addRecord"
                            >
                                <i class="fa-sharp fa-solid fa-plus"></i> Add
                                Schedule
                            </button>
                            <br>
                            <!-- Modal -->
                            <div class="modal modal-lg fade addrecord" id="addRecord">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">
                                                Add Schedule
                                            </h3>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                            ></button>
                                        </div>
                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <form
                                                action="setSchedule.php"
                                                method="post"
                                                class="form"
                                            >
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div
                                                                class="form-floating"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    name="lname"
                                                                    class="form-control"
                                                                    placeholder="Last Name"
                                                                    required
                                                                    maxlength="50"
                                                                />
                                                                <label
                                                                    for="lname"
                                                                    >Last
                                                                    Name</label
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div
                                                                class="form-floating"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    name="fname"
                                                                    class="form-control"
                                                                    placeholder="First Name"
                                                                    required
                                                                    maxlength="50"
                                                                />
                                                                <label
                                                                    for="fname"
                                                                    >First
                                                                    Name</label
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div
                                                                class="form-floating"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    name="sex"
                                                                    class="form-control"
                                                                    placeholder="Sex"
                                                                    required
                                                                    maxlength="6"
                                                                />
                                                                <label for="sex"
                                                                    >Sex</label
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div
                                                                class="form-floating"
                                                            >
                                                                <input
                                                                    type="number"
                                                                    name="age"
                                                                    class="form-control"
                                                                    placeholder="Age"
                                                                    required
                                                                    maxlength="110"
                                                                    min="0"
                                                                />
                                                                <label for="age"
                                                                    >Age</label
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div
                                                                class="form-floating"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    name="con"
                                                                    class="form-control"
                                                                    placeholder="Condition"
                                                                    required
                                                                    maxlength="50"
                                                                />
                                                                <label
                                                                    for="condition"
                                                                    >Condition</label
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div
                                                                class="form-floating"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    name="stat"
                                                                    class="form-control"
                                                                    placeholder="Status"
                                                                    required
                                                                    maxlength="50"
                                                                />
                                                                <label
                                                                    for="stat"
                                                                    >Status</label
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-floating">
                                                                <input type="date" name="date" class="form-control" placeholder="Date" required maxlength="50">
                                                                <label for="date">Date</label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-floating">
                                                                <input type="time" name="time" class="form-control" placeholder="Time" required maxlength="50">
                                                                <label for="time">Time</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="rol">
                                                            <button
                                                                class="btn btn-dark my-1 w-100"
                                                                type="submit"
                                                                name="add"
                                                            >
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <br />
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Patient No.</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Condition</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                                <?php
                                include "conn.php";

                                $data = "SELECT * FROM schedule";
                                $res = mysqli_query($conn, $data);

                                if($res) {
                                    while($row = mysqli_fetch_array($res)) {
                                        $id = $row['id'];
                                        $lastname = $row['lastname'];
                                        $firstname = $row['firstname'];
                                        $sex = $row['sex'];
                                        $age = $row['age'];
                                        $con = $row['con'];
                                        $stat = $row['status'];
                                        $date = $row['date'];
                                        $time = $row['time'];

                                        echo '<tbody>
                                        <tr>
                                        <td>'.$id.'</td>
                                        <td>'.$lastname.'</td>
                                        <td>'.$firstname.'</td>
                                        <td>'.$sex.'</td>
                                        <td>'.$age.'</td>
                                        <td>'.$con.'</td>
                                        <td>'.$stat.'</td>
                                        <td>'.$date.'</td>
                                        <td>'.$time.'</td>
                                        <td>
                                        <button class="btn btn-primary" type="button">
                                        <a href = "updateSchedule.php?editid='.$id.'" style="color: white; text-decoration: none;"><i class="fa-solid fa-pen-to-square" style="color: white;"></i></a>
                                        </button>
                                        <button class="btn btn-danger" type="button">
                                        <a href = "deleteSchedule.php?deleteid='.$id.'" style="color: white; text-decoration: none;"><i class="fa-solid fa-trash" style="color: white;"></i></a>
                                        </button>
                                        </td>
                                        </tr>
                                        <tbody>';
                                    }
                                }
                                ?>
                        </table>
                    </div>
        </div>
        <footer>
            <div class="footer fixed-bottom">
                <h5 class="footer-title">
                    SNNCare: Sto. Nino Norte Health Care Center
                </h5>
                <small
                    >&copy; 2023 Copyright |
                    <span class="rights">All Rights Reserved</span></small
                >
            </div>
        </footer>
    </body>
</html>
