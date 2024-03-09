<?php

include "conn.php";

if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $table = "SELECT * FROM register WHERE id = $id";
    $check = mysqli_query($conn, $table);

    if($check == TRUE) {
        while ($row = mysqli_fetch_array($check)) {
            $id = $row['id'];
            $fullname = $row['fullname'];
            $country = $row['country'];
            $address = $row['address'];
            $phone = $row['phone'];
            $email = $row['email'];

            if(isset($_POST['update'])) {
                $fullname = $_POST['fullname'];
                $country = $_POST['country'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];

                $update = mysqli_query($conn, "UPDATE register SET fullname = '$fullname', country = '$country', address = '$address', phone = '$phone', email = '$email' WHERE id = $id");

                if($update == TRUE) {
                    ?>
                    <script>
                        alert("Updated Successfully");
                        window.location.href = "profile.php";
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Failed to Update");
                        window.location.href = "profile.php";
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
    <title>Update Admin</title>

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
            .title {
                text-align: center;
            }
            .form {
                width: 50%;
                display: block;
                margin: auto;
            }
            .form .form-control {
                margin: 5px auto;
            }
            .form-control:focus {
                box-shadow: none;
            }
            .buttons {
                margin-top: 10px;
                display: flex;
                justify-content: space-between;
            }
        </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="title">Update Admin Profile</h1>
        <br>
        <form action="" method="post" class="form">
            <fieldset>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="fullname" placeholder="Fullname" maxlength="50" value="<?php echo $fullname ?>" required>
                        <label for="fullname">Fullname</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" list="country" name="country" placeholder="Country" maxlength="50" required value="<?php echo $country ?>">
                        <label for="country">Country</label>
                        <datalist id="country">
                                <option value="Argentina">Argentina</option>
                                <option value="Australia">Australia</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Dominican Republic">
                                    Dominican Republic
                                </option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="Greece">Greece</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hungary">Hungary</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Laos">Laos</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Peru">Peru</option>
                                <option value="Papua New Guinea">
                                    Papua New Guinea
                                </option>
                                <option value="Philippines">Philippines</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Russia">Russia</option>
                                <option value="Saudi Arabia">
                                    Saudi Arabia
                                </option>
                                <option value="Singapore">Singapore</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Kingdom">
                                    United Kingdom
                                </option>
                                <option value="United States of America">
                                    United States of America
                                </option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </datalist>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="address" placeholder="Address" maxlength="50" required value="<?php echo $address ?>">
                        <label for="address">Address</label>
                    </div>
                    <div class="form-floating">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone" maxlength="50" required value="<?php echo $phone ?>">
                        <label for="phone">Phone</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" placeholder="Email" maxlength="50" required value="<?php echo $email ?>">
                        <label for="email">Email</label>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn btn-primary w-25" onclick="window.location.href = 'profile.php';">Cancel</button>
                        <button class="btn btn-dark w-25" type="submit" name="update">Update</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>