<?php
include "conn.php";
session_start();

if(empty($_SESSION)) {
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
        <title>SNNCare: | Suggestions</title>

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

        <!-- External -->
        <link rel="stylesheet" href="suggestion.css" />

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
            .btn:focus {
                box-shadow: none;
            }
            .underline {
                text-decoration: underline;
                color: #007bff;
            }
            .small {
                font-size: 12px;
                color: #495057;
            }
            .source {
                text-decoration: none;
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
                            <a href="schedule.php" class="nav-link"
                                ><i class="fa-solid fa-calendar"></i>
                                Schedule</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="suggestion.php" class="nav-link active">
                                <i class="fa-solid fa-lightbulb"></i>
                                Suggestions
                            </a>
                        </li>
                        <hr />
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link"
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
                <div class="container">
                    <div class="header">
                        <h1 class="main-title">Suggestions</h1>
                    </div>
                </div>
                <br />
                <div class="container">
                    <table class="table">
                        <tr>
                            <th>Malaria</th>
                            <th>Dengue</th>
                            <th>Typhoid Fever</th>
                            <th>Leptospirosis</th>
                        </tr>
                        <tr>
                            <td>
                                Drape mosquito netting over beds. Put screens on
                                windows and doors. Treat clothing, mosquito
                                nets, tents, sleeping bags and other fabrics
                                with an insect repellent called permethrin.
                            </td>
                            <td>
                                Use Environmental Protection Agency
                                (EPA)-registered insect repellents with one of
                                the active ingredients below. When used as
                                directed, EPA-registered insect repellents are
                                proven safe and effective, even for pregnant and
                                breastfeeding women.
                            </td>
                            <td>
                                Wash before eating or preparing food and after
                                using the toilet. Carry an alcohol-based hand
                                sanitizer for times when water isn't available.
                                Avoid drinking untreated water.
                            </td>
                            <td>
                                Protective clothing or footwear should be worn
                                by those exposed to contaminated water or soil
                                because of their job or recreational activities.
                            </td>
                        </tr>
                    </table>
                    <table class="table">
                        <tr>
                            <th>Filariasis</th>
                            <th>HIV</th>
                            <th>Tuberculosis (TB)</th>
                            <th>Influenza</th>
                        </tr>
                        <tr>
                            <td>
                                The best way to prevent lymphatic filariasis is
                                to avoid mosquito bites. The mosquitoes that
                                carry the microscopic worms usually bite between
                                the hours of dusk and dawn . If you live in an
                                area with lymphatic filariasis:
                                <br />
                                <ul>
                                    <li>At night</li>
                                    <ul>
                                        <li>
                                            Sleep in an air-conditioned room or
                                        </li>
                                        <li>Sleep under a mosquito net</li>
                                    </ul>
                                    <li>Between dusk and dawn</li>
                                    <ul>
                                        <li>
                                            Wear long sleeves and trousers and
                                        </li>
                                        <li>
                                            Use mosquito repellent on exposed
                                            skin
                                        </li>
                                    </ul>
                                </ul>
                                <br />
                                <!-- <p class="small">
                                    Content source:
                                    <a
                                        href="https://www.cdc.gov/globalhealth/"
                                        class="source"
                                    >
                                        Global Health, Division of Parasitic
                                        Diseases and Malaria</a
                                    >
                                </p> -->
                            </td>
                            <td>
                                PrEP (pre-exposure prophylaxis) can reduce your
                                chance of getting HIV from sex or injection drug
                                use. When taken as prescribed, PrEP is highly
                                effective for preventing HIV. <br />
                                This section answers some of the most common
                                questions about PrEP. You can also download
                                materials to share or watch videos on the
                                benefits of PrEP.
                                <br />
                                <br />
                                PEP (post-exposure prophylaxis) means taking
                                medicine to prevent HIV after a possible
                                exposure. PEP should be used only in emergency
                                situations and must be started within 72 hours
                                after a recent possible exposure to HIV. This
                                section answers some of the most common
                                questions about PEP. You can also download PEP
                                materials to share.
                                <br />
                                <br />
                                <!-- <p class="small">
                                    Content source:
                                    <a
                                        href="https://www.cdc.gov/hiv/default.html"
                                        class="source"
                                    >
                                        Division of HIV Prevention, National
                                        Center for HIV, Viral Hepatitis, STD,
                                        and TB Prevention, Centers for Disease
                                        Control and Prevention</a
                                    >
                                </p> -->
                            </td>
                            <td>
                                “TB” is short for a disease called tuberculosis.
                                TB is spread through the air from one person to
                                another. TB germs are passed through the air
                                when someone who is sick with TB disease of the
                                lungs or throat coughs, speaks, laughs, sings,
                                or sneezes. Anyone near the sick person with TB
                                disease can breathe TB germs into their lungs.
                                <br /><br />
                                TB germs can live in your body without making
                                you sick. This is called latent TB infection.
                                This means you have only inactive (sleeping) TB
                                germs in your body. The inactive germs cannot be
                                passed on to anyone else. However, if these
                                germs wake up or become active in your body and
                                multiply, you will get sick with TB disease.
                                <br />
                                <br />
                                When TB germs are active (multiplying in your
                                body), this is called TB disease. These germs
                                usually attack the lungs. They can also attack
                                other parts of the body, such as, the kidneys,
                                brain, or spine. TB disease will make you sick.
                                People with TB disease can spread the germs to
                                people they spend time with every day.
                                <br />
                                <br />
                                <!-- <p class="small">
                                    Content source:
                                    <a
                                        href="https://www.cdc.gov/nchhstp/default.htm"
                                        class="source"
                                        >Division of Tuberculosis Elimination,
                                        National Center for HIV, Viral
                                        Hepatitis, STD, and TB Prevention,
                                        Centers for Disease Control and
                                        Prevention</a
                                    > 
                                </p> -->
                            </td>
                            <td>
                                CDC recommends a yearly flu vaccine as the first
                                and most important step in protecting against
                                flu viruses.
                                <br /><br />
                                Flu vaccines help to reduce the burden of flu
                                illnesses, hospitalizations and deaths on the
                                health care system each year. (Read more about
                                flu vaccine benefits.)
                                <br /><br />
                                This season, all flu vaccines will be designed
                                to protect against the four flu viruses that
                                research indicates will be most common. (Visit
                                Vaccine Virus Selection for this season's
                                vaccine composition.)
                                <br /><br />
                                Everyone 6 months and older should get an annual
                                flu vaccine, ideally by the end of October.
                                Learn more about vaccine timing.
                                <br /><br />
                                Vaccination of people at higher risk of
                                developing serious flu complications is
                                especially important to decrease their risk of
                                severe flu illness. <br /><br />
                                People at higher risk of serious flu
                                complications include young children, pregnant
                                people, people with certain chronic health
                                conditions like asthma, diabetes or heart and
                                lung disease, and people 65 years and older.
                                <br /><br />
                                Vaccination also is important for health care
                                workers, and other people who live with or care
                                for people at higher risk to keep from spreading
                                flu to them. This is especially true for people
                                who work in long-term care facilities, which are
                                home to many of the people most vulnerable to
                                flu.
                                <br />
                                Children younger than 6 months are at higher
                                risk of serious flu illness but are too young to
                                be vaccinated. People who care for infants
                                should be vaccinated instead.
                                <br />
                                <br />
                                <!-- <p class="small">
                                    Content source:
                                    <a
                                        href="https://www.cdc.gov/ncird/index.html"
                                        class="source"
                                        >Centers for Disease Control and
                                        Prevention, National Center for
                                        Immunization and Respiratory Diseases
                                        (NCIRD)</a
                                    > 
                                </p> -->
                            </td>
                        </tr>
                    </table>
                    <table class="table">
                        <tr>
                            <th>Diarrhea</th>
                            <th>Chicken Pox</th>
                        </tr>
                        <tr>
                            <td>
                                <strong>Lifestyle and Home Remedies</strong>
                                <br />
                                <p>
                                    Diarrhea usually clears up quickly without
                                    treatment. To help you cope with your signs
                                    and symptoms until the diarrhea goes away,
                                    try to do the following:
                                </p>
                                <br />
                                <ul>
                                    <li>
                                        <strong> Drink plenty of liquids</strong
                                        >, including water, broths and juices.
                                        Avoid caffeine and alcohol.
                                    </li>
                                    <li>
                                        <strong>
                                            Add semisolid and low-fiber foods
                                            gradually</strong
                                        >
                                        as your bowel movements return to
                                        normal. Try soda crackers, toast, eggs,
                                        rice or chicken.
                                    </li>
                                    <li>
                                        <strong> Avoid certain foods </strong>
                                        such as dairy products, fatty foods,
                                        high-fiber foods or highly seasoned
                                        foods for a few days.
                                    </li>
                                    <li>
                                        <strong>
                                            Ask about anti-diarrheal medications </strong
                                        >. Over-the-counter anti-diarrheal
                                        medications, such as loperamide and
                                        bismuth subsalicylate, might help reduce
                                        the number of watery bowel movements and
                                        control severe symptoms. <br />Certain
                                        medical conditions and infections —
                                        bacterial and parasitic — can be
                                        worsened by these medications because
                                        they prevent your body from getting rid
                                        of what's causing the diarrhea. Some of
                                        these medications are not recommended
                                        for children. Check with your doctor
                                        before taking these medications or
                                        giving them to a child.
                                    </li>
                                    <li>
                                        <strong>
                                            Consider taking probiotics </strong
                                        >. These microorganisms may help restore
                                        a healthy balance to the intestinal
                                        tract by boosting the level of good
                                        bacteria, though it's not clear if they
                                        can help shorten a bout of diarrhea.
                                        Probiotics are available in capsule or
                                        liquid form and are also added to some
                                        foods, such as certain brands of yogurt.
                                        Further research is needed to better
                                        understand which strains of bacteria are
                                        most helpful or what doses are needed.
                                    </li>
                                </ul>
                                <!-- <p class="small">
                                    Source:
                                    <a
                                        href="https://www.mayoclinic.org/about-this-site/meet-our-medical-editors"
                                        class="source"
                                        >By Mayo Clinc Staff</a
                                    > 
                                </p> -->
                            </td>
                            <td>
                                <p>
                                    Varicella (chickenpox) is an acute
                                    infectious disease. It is caused by
                                    varicella-zoster virus (VZV), which is a DNA
                                    virus that is a member of the herpesvirus
                                    group. After the primary infection, VZV
                                    stays in the body (in the sensory nerve
                                    ganglia) as a latent infection. Primary
                                    infection with VZV causes varicella.
                                    Reactivation of latent infection causes
                                    herpes zoster (shingles).
                                </p>
                                <br />
                                <!-- <p class="small">
                                    Source:
                                    <a
                                        href="https://www.cdc.gov/ncird/index.html"
                                        class="source"
                                        >National Center for Immunization and
                                        Respiratory Diseases (NCIRD), Division
                                        of Viral Diseases</a
                                    > 
                                </p> -->
                            </td>
                        </tr>
                    </table>
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
