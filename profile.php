<?php
include "conn.php";
session_start();

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
        <title>SNNNCare | Profile</title>

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
            .nav-item .nav-link {
                color: #343a40;
                padding: 5px 20px;
                border-radius: 5px;
            }
            .nav-item .nav-link:hover {
                background: #343a40;
                color: #fff;
            }
            .navbar-toggler {
                margin: 0px auto auto 20px;
            }
            .logo {
                height: auto;
                width: 50px;
                border-radius: 50%;
            }
            .logout {
                float: right;
            }
            .btn:focus {
                box-shadow: none;
            }
            /* main */
            .main-content {
                padding-bottom: 100px;
            }
            .main {
                margin-bottom: 50px;
            }
            .flex {
                display: flex;
                justify-content: space-between;
                margin-top: 30px;
            }
            .flex .profile .profile-pic {
                border-radius: 50%;
                width: 150px;
            }
            .main-title h6 {
                color: #adb5bd;
            }
            .main-title .bold {
                font-weight: bold;
                color: #212529;
            }
            .link {
                text-decoration: none;
                color: #adb5bd;
            }
            .link1 {
                color: #848c94;
            }
            .profile {
                height: 300px;
                width: 500px;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.1);
                padding: 20px 50px;
                background: #fff;
            }
            .profile-pic {
                height: 150px;
                width: 100px;
                display: block;
                margin: auto;
                border-radius: 100%;
                object-fit: cover;
            }
            .name {
                text-align: center;
                font-weight: bold;
            }
            .announce {
                display: block;
                margin: auto;
            }
            .records {
                height: auto;
                width: auto;
                padding: 20px;
                background: #fff;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.1);
                flex-grow: 1;
            }
            .records .navbar .navbar-nav .nav-item .nav-link:hover {
                background: none !important;
                color: #212529;
                cursor: pointer;
            }
            .records .overview {
                padding-bottom: 10px;
                border-bottom: 1px solid var(--bs-gray-500);
            }
            .profile-data {
                display: flex;
                align-items: baseline;
            }
            .profile-flex {
                margin-right: 50px;
            }
            .form-control {
                margin: 3px 0px;
            }
            .form-control:focus {
                box-shadow: none;
            }
            .btn:focus {
                box-shadow: none;
            }
            .navbar .navbar-nav .nav-item {
                border-bottom: 3px solid #fff;
            }
            .records .navbar .navbar-nav .nav-item:hover {
                border-bottom: 3px solid grey;
                transition: .3s all ease;
            }
            /* footer */
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
                    SNNCare: Sto. Nino Health Care Center
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
                            <a href="schedule.php" class="nav-link"
                                ><i class="fa-solid fa-calendar"></i>
                                Schedule</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="suggestion.php" class="nav-link">
                                <i class="fa-solid fa-lightbulb"></i>
                                Suggestions</a
                            >
                        </li>
                        <hr />
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link active"
                                ><i class="fa-solid fa-user"></i> Profile</a
                            >
                        </li>
                        <li class="nav-item"><a href="reqUpdate.php" class="nav-link"><i class="fa-solid fa-pen-to-square"></i>Update Requests</a></li>
                        <li class="nav-item"><a href="addRequest.php" class="nav-link"><i class="fa-sharp fa-solid fa-plus"></i>Pending Records</a></li>
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
                        <span class="fa-solid fa-bars"> </span>
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

                <?php
                    include 'conn.php';

                    if(empty($_SESSION)) {
                        ?>
                        <script>
                            window.location.href = 'admin_login.php';
                        </script>
                        <?php
                    }

                    $query = "SELECT * FROM register WHERE email = '$email'";
                    $run = mysqli_query($conn, $query);

                    if($run) {
                        while ($row = mysqli_fetch_array($run)) {
                            $id = $row['id'];
                            $fullname = $row['fullname'];
                            $country = $row['country'];
                            $address = $row['address'];
                            $phone = $row['phone'];
                            $profile = $row['profile'];
                            $email = $row['email'];
                        }
                    }
                ?>
                <div class="container main">
                    <div class="main-title">
                        <h2>Administrator</h2>
                    </div>
                    <h6>
                        <a href="home.php" class="link">Home</a> /
                        <span class="link1">Profile </span> / <span class="active"><?php echo $fullname; ?></span>
                    </h6>
                    <div class="flex">
                        <div class="profile">
                            <img
                                src="<?php echo 'profiles/documents/'.$profile; ?>"
                                alt="Admin Profile"
                                class="profile-pic"
                            />
                            <br />
                            <h4 class="name"><?php echo $fullname ?></h4>
                            <button class="btn btn-primary announce mt-3" type="button" data-bs-toggle="modal" data-bs-target="#announce"><i class="fa-solid fa-plus"></i> Announcement</button>
                        </div>
                        <div class="modal fade announcement" id="announce">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title">Add Announcement</h1>
                                        <button class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="announcement.php" method="post">
                                                <div class="col form-floating">
                                                    <input type="text" name="subject" class="form-control" placeholder="Subject" maxlength="255" required>
                                                    <label for="subject">Subject</label>
                                                </div>
                                                <div class="col form-floating mt-3">
                                                    <input type="date" name="date" class="form-control" placeholder="Date" required>
                                                    <label for="date">Date</label>
                                                </div>
                                                <div class="col form-floating mt-3">
                                                    <input type="text" name="agenda" class="form-control" placeholder="Agenda" maxlength="255" required>
                                                    <label for="agenda">Agenda</label>
                                                </div>
                                                <div class="col form-floating mt-3">
                                                    <textarea name="announce" class="form-control" cols="50" rows="50" placeholder="Write your announcement here..."></textarea>
                                                    <label for="announce">Write your announcement here...</label>
                                                </div>
                                                <button type="submit" name="add" class="btn btn-primary mt-3 w-100">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="records ms-3">
                            <nav class="navbar navbar-expand">
                                <ul class="navbar-nav" role="tablist">
                                    <li class="nav-item"><h5><a href="#overview" class="nav-link active" data-bs-toggle="tab">Overview</a></h5></li>
                                    <li class="nav-item"><h5><a href="#update" class="nav-link" data-bs-toggle="tab">Update Profile</a></h5></li>
                                    <li class="nav-item"><h5><a href="#delete" class="nav-link" data-bs-toggle="tab">Delete Profile</a></h5></li>
                                </ul>
                            </nav>
                            <br />
                            <div class="tab-content">
                                <div class="container tab-pane active" id="overview">
                                    <h5><span class="bold">Profile Details</span></h5>
                                    <br />
                                    <div class="profile-data">
                                        <div class="profile-flex">
                                            <p class="left"><strong>Full Name</strong></p>
                                            <p class="left"><strong>Country</strong></p>
                                            <p class="left"><strong>Address</strong></p>
                                            <p class="left"><strong>Phone</strong></p>
                                            <p class="left"><strong>Email</strong></p>
                                        </div>
                                        <div class="profile-info">
                                            <p class="right" ><?php echo $fullname ?></p>
                                            <p class="right" ><?php echo $country ?></p>
                                            <p class="right" ><?php echo $address ?></p>
                                            <p class="right"><?php echo $phone ?></p>
                                            <p class="right"><?php echo $email ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container tab-pane fade" id="update">
                                    <h5><span class="bold">Update Profile</span></h5>
                                    <br>
                                    <div class="profile-data">
                                        <div class="profile-flex">
                                            <p class="left"><strong>Full Name</strong></p>
                                            <p class="left"><strong>Country</strong></p>
                                            <p class="left"><strong>Address</strong></p>
                                            <p class="left"><strong>Phone</strong></p>
                                        </div>
                                        <div class="profile-info">
                                            <p class="right"><?php echo $fullname; ?></p>
                                            <p class="right"><?php echo $country; ?></p>
                                            <p class="right"><?php echo $address; ?></p>
                                            <p class="right"><?php echo $phone; ?></p>
                                            <button type="button" class="btn btn-dark w-100 mt-1"><?php echo '<a href="updateprofile.php?updateid='.$id.'" style="text-decoration: none; color: white;">Update</a>' ?></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container tab-pane fade" id="delete">
                                    <h5><span class="bold">Delete Profile</span></h5>
                                    <br />
                                    <div class="profile-data">
                                        <div class="profile-flex">
                                            <p class="left"><strong>Full Name</strong></p>
                                            <p class="left"><strong>Country</strong></p>
                                            <p class="left"><strong>Address</strong></p>
                                            <p class="left"><strong>Phone</strong></p>
                                        </div>
                                        <div class="profile-info">
                                            <p class="right" ><?php echo $fullname ?></p>
                                            <p class="right" ><?php echo $country ?></p>
                                            <p class="right" ><?php echo $address ?></p>
                                            <p class="right"><?php echo $phone ?></p>
                                            <button type="button" class="btn btn-danger mt-1 w-100"><?php echo '<a href="deleteprofile.php?deleteid='.$id.'" style="text-decoration: none; color: white;">Delete</a>'?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
