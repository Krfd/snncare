<?php
include "conn.php";
session_start();

if(empty($_SESSION)) {
    ?>
    <script>
        alert("Session expired\nPlease login again.");
        window.location.href = "user.html";
    </script>
    <?php
    } else {
        $email = $_SESSION['user'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SNNCare | Announcement</title>

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

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            :root {
                --bs-black: #000;
                --bs-white: #fff;
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
                background: var(--bs-gray-200);
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
            .main-content {
                padding-bottom: 100px;
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
            .main-title {
                font-weight: bold;
            }
            .announce .subject {
                display: flex;
                justify-content: space-between;
                align-items: center;
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
                <h1 class="container offcanvas-title">
                    SNNCare: <br />Sto. Nino Health Care Center
                </h1>
                <button
                    class="btn-close text-reset"
                    type="button"
                    data-bs-dismiss="offcanvas"
                ></button>
            </div>
            <nav class="navbar">
                <div class="container-fluid">
                    <ul class="navbar-nav w-100">
                        <hr />
                        <li class="nav-item">
                            <a href="user_home.php" class="nav-link"
                                ><i class="fa-solid fa-house"></i> Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="user_records.php" class="nav-link"
                                ><i class="fa-solid fa-clipboard"></i>
                                Records</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="user_requirements.php" class="nav-link"
                                ><i class="fa-sharp fa-solid fa-file"></i>
                                Requirements</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="user_schedule.php" class="nav-link"
                                ><i class="fa-solid fa-calendar"></i>
                                Schedule</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="user_suggestion.php" class="nav-link"
                                ><i class="fa-solid fa-lightbulb"></i>
                                Suggestions</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="user_announcement.php" class="nav-link active"
                                ><i class="fa-solid fa-bullhorn"></i>
                                Bulletin</a
                            >
                        </li>
                        <hr />
                    </ul>
                </div>
            </nav>
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
                        <span class="fa-solid fa-bars"></span> Dashboard
                    </button>
                    <button
                        type="button"
                        class="btn btn-dark logout justify-content-end"
                    >
                        <a
                            href="user_logout.php"
                            style="text-decoration: none; color: #fff"
                            >Log out</a
                        >
                    </button>
                </div>
                <hr />
            </div>
            <div class="container">
                <div class="header">
                    <h1 class="main-title">Announcement</h1>
                    <br />
                </div>
                <?php
                include "conn.php";

                $announcement = "SELECT * FROM announcement";
                $result = mysqli_query($conn, $announcement);

                if($result == TRUE) {
                    while($row = mysqli_fetch_array($result)) {
                        $subject = $row['subject'];
                        $date = $row['date'];
                        $agenda = $row['agenda'];
                        $announcement = $row['announcement'];
                    }
                }
                ?>
                <div class="announce">
                    <div class="subject">
                        <h1><?php echo $subject; ?></h1>
                        <h6>Date Posted: <?php echo $date; ?></h6>
                    </div>
                    <div class="agenda">
                        <h3><?php echo $agenda; ?></h3>
                    </div>
                    <div class="announcement">
                        <p><?php echo $announcement; ?></p>
                    </div>
                </div>
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
