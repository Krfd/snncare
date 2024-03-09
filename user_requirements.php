<?php
session_start();
include "conn.php";

if(empty($_SESSION)) {
    ?>
    <script>
        alert("Session expired\nPlease login again.");
        window.location.href = "admin_login.html";
    </script>
    <?php
    } else {
        $email = $_SESSION;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SNNCare | Requirements</title>

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
                background: var(--bs-gray-200);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
            }
            .flex {
                display: flex;
                align-items: center;
            }
            .offcanvas .nav-item .nav-link {
                color: #343a40;
                padding: 5px 20px;
                border-radius: 5px;
            }
            .offcanvas .nav-item .nav-link:hover {
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
            /* main-content */
            .main-content {
                padding-bottom: 100px;
            }
            .main-title {
                font-weight: bold;
            }
            .sub-title {
                font-size: 3rem;
                font-weight: bold;
            }
            .underline {
                color: #0d6efd;
                text-decoration: underline;
            }
            .highlight {
                color: #c32939;
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
                text-transform: uppecase;
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
                            <a href="user_requirements.php" class="nav-link active"
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
                            <a href="user_suggestion.php" class="nav-link">
                                <i class="fa-solid fa-lightbulb"></i>
                                Suggestions</a
                            >
                        </li>
                        <li class="nav-item">
                                        <a
                                            href="user_announcement.php"
                                            class="nav-link"
                                            ><i class="fa-solid fa-bullhorn"></i>
                                            bulletin</a
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
                        <span class="fa-solid fa-bars"> </span>
                        Dashboard
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
                <div class="container">
                    <nav class="navbar navbar-expand justify-content-center">
                        <ul class="navbar-nav nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a
                                    href="#malaria"
                                    class="nav-link active"
                                    data-bs-toggle="tab"
                                    >Malaria</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#dengue"
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    >Dengue</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#leptos"
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    >Leptospirosis</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#typhoid"
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    >Tyhpoid Fever</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#filariasis"
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    >Filariasis</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#diarrhea"
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    >Diarrhea</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="#chickenpox"
                                    class="nav-link"
                                    data-bs-toggle="tab"
                                    >Chicken Pox</a
                                >
                            </li>
                        </ul>
                    </nav>
                    <div class="header">
                        <h1 class="main-title">Requirements</h1>
                    </div>
                </div>
                <br />
                <div class="tab-content">
                    <div class="container tab-pane active" id="malaria">
                        <h2 class="sub-title">Malaria</h2>
                        <br />
                        <p>
                            Malaria can be a severe, potentially fatal disease
                            (especially when caused by Plasmodium falciparum),
                            and treatment should be initiated as soon as
                            possible. Which drug regimen to treat a patient with
                            malaria depends on the clinical status of the
                            patient, the type (species) of the infecting
                            parasite, the area where the infection was acquired
                            and its drug-resistance status, pregnancy status,
                            and finally history of drug allergies, or other
                            medications taken by the patient.
                        </p>
                        <p>Related Links</p>
                        <ul>
                            <li>
                                Treatment of Malaria:
                                <a
                                    href="https://www.cdc.gov/malaria/diagnosis_treatment/clinicians1.html"
                                    >Guidelines for Clinicians</a
                                >
                            </li>
                            <li>
                                Treatment Algorithm:
                                <a
                                    href="https://www.cdc.gov/malaria/resources/pdf/Malaria_Managment_Algorithm_202208.pdf"
                                    >Treatment summary in decision-tree
                                    format</a
                                >
                            </li>
                            <li>
                                Treatment Table:
                                <a
                                    href="https://www.cdc.gov/malaria/resources/pdf/Malaria_Treatment_Table_202208.pdf"
                                    >Treatment summary in table format</a
                                >
                            </li>
                        </ul>
                        <br />
                        <h5>
                            <strong
                                >Table 1. Uncomplicated malaria: Plasmodium
                                falciparum or unknown species</strong
                            >
                            (If later diagnosed as P. vivax or P. ovale, see
                            Table 2 for antirelapse treatment)
                        </h5>
                        <table class="table">
                            <tr>
                                <th>Drug Susceptibility</th>
                                <th>Recommended Adult Regimen</th>
                                <th>Recommended Pediatric Regimen</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong
                                        >Chloroquine resistant or unknown
                                        resistance
                                    </strong>
                                </td>
                                <td>
                                    <strong
                                        >A. Artemether-lumefantrine
                                        (Coartem)</strong
                                    >
                                    <br />
                                    (1 tab: 20 mg artemether and 120 mg
                                    lumefantrine) <br />
                                    <br />
                                    Adults: 4 tabs po per dose <br />
                                    <br />
                                    Three-day course: <br /><br />
                                    Day 1: Initial dose and second dose 8 hours
                                    later
                                    <br />
                                    Days 2 and 3: 1 dose BID
                                    <br /><br /><br />
                                    <strong
                                        >B. Atovaquone-proguanil
                                        (Malarone)</strong
                                    >
                                    <br />
                                    (adult tab: 250 gm atovaquone and 100 mg
                                    proguanil) <br /><br />
                                    4 adult tabs po QD x 3 days
                                </td>
                                <td>
                                    <strong
                                        >A. Artemether-lumefantrine
                                        (Coartem)</strong
                                    ><br />
                                    (1 tab: 20 mg artemether and 120 mg
                                    lumefantrine) <br /><br />
                                    5-&lt;15 kg: 1 tab po per dose <br />
                                    15-&lt;25 kg: 2 tabs po per dose <br />
                                    25-&lt;35 kg: 3 tabs po per dose <br />
                                    ≥35 kg: 4 tabs po per dose <br /><br />
                                    Three-day course: <br />
                                    Day 1: Initial dose and second dose 8 hours
                                    later
                                    <br />
                                    Days 2 and 3: 1 dose BID <br /><br />
                                    <strong
                                        >B. Atovaquone-proguanil
                                        (Malarone)</strong
                                    >
                                    <br />
                                    (adult tab: 250 gm atovaquone and 100 mg
                                    proguanil; <br />
                                    Peds tab: 62.5 mg atovaquone and 25 mg
                                    proguanil) <br /><br />
                                    <br />
                                    5-&lt;8 kg: 2 peds tabs po QD x 3 days
                                    <br />
                                    8-&lt;10 kg: 3 peds tabs po QD x 3 days
                                    <br />
                                    10-&lt;20 kg: 1 adult tab po QD x 3 days
                                    <br />
                                    20-&lt;30 kg: 2 adult tabs po QD x 3 days
                                    <br />
                                    30-&lt;40 kg: 3 adult tabs po QD x 3 days
                                    <br />
                                    ≥40 kg: 4 adult tabs po QD x 3 days
                                </td>
                            </tr>
                        </table>
                        <br />
                        <h5>
                            <strong
                                >Table 1. (continued) Uncomplicated malaria: P.
                                falciparum or unknown species</strong
                            >
                            (If later diagnosed as P. vivax or P. ovale, see
                            Table 2 for additional treatment needed)
                        </h5>
                        <table class="table">
                            <tr>
                                <th>Drug Susceptibility</th>
                                <th>Recommended Adult Regimens</th>
                                <th>Recommended Pediatric Regimens</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong
                                        >Chloroquine resistant or unknown
                                        resistance</strong
                                    >
                                </td>
                                <td>
                                    <strong
                                        >C. Quinine sulfate8 plus doxycycline,
                                        tetracycline, or clindamycin </strong
                                    ><br /><br />Quinine sulfate: 542 mg base
                                    (650 mg salt) po TID x 3 or 7 days7
                                    Doxycycline: 100 mg po BID x 7 days
                                    Tetracycline: 250 mg po QID x 7 days
                                    Clindamycin: 20 mg/kg/day po divided TID x 7
                                    days <br /><br />
                                    <strong>D. Mefloquine</strong>
                                    <br />Dose 1: 684 mg base (750 mg salt) po
                                    Dose 2 at 6 to 12 h: 456 mg base (500 mg
                                    salt) po
                                </td>
                                <td>
                                    <strong
                                        >C. Quinine sulfate7 plus doxycycline,
                                        tetracycline, or clindamycin</strong
                                    >
                                    <br /><br />
                                    Quinine sulfate: 8.3 mg base/kg (10 mg
                                    salt/kg) po TID x 3 or 7 days7 Doxycycline:
                                    2.2 mg/kg po BID x 7 days Tetracycline: 25
                                    mg/kg/day po divided QID x 7 days
                                    Clindamycin: 20 mg /kg/day po divided TID x
                                    7 days <br /><br />
                                    <strong>D. Mefloquine</strong>
                                    Dose 1: 13.7 mg base/kg (15 mg salt/kg) po
                                    Dose 2 at 6 to 12 h: 9.1 mg base/kg (10 mg
                                    salt/kg) po
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Chloroquine sensitive</strong>
                                </td>
                                <td>
                                    <strong
                                        >Chloroquine phosphate (Arale and
                                        generics)</strong
                                    >
                                    <br />
                                    Dose 1: 600 mg base (1,000 mg salt) po Doses
                                    2 to 4 (3 additional doses) at 6, 24 and 48
                                    h: 300 mg base (500 mg salt) po per dose; or
                                    <br /><br /><strong
                                        >Hydroxychloroquine (Plaquenil and
                                        generics)</strong
                                    >
                                    Dose 1: 620 mg base (800 mg salt) po Doses 2
                                    to 4 (3 additional doses) at 6, 24 and 48 h:
                                    310 mg base (400 mg salt) po per dose
                                </td>
                                <td>
                                    <strong
                                        >Chloroquine phosphate (Arale and
                                        generics)
                                    </strong>
                                    <br />
                                    Dose 1: 10 mg base/kg (16.7 mg salt/kg) po
                                    Doses 2 to 4 (3 additional doses) at 6, 24
                                    and 48 h: 5 mg base/kg (8.3 mg salt/kg) po
                                    per dose; or
                                    <br /><br /><strong
                                        >Hydroxychloroquine (Plaquenil and
                                        generics)</strong
                                    >
                                    Dose 1: 10 mg base/kg (12.9 mg salt/kg) po
                                    Doses 2 to 4 (3 additional doses) at 6, 24
                                    and 48 h: 5 mg base/kg (6.5 mg salt/kg) po
                                    per dose
                                </td>
                            </tr>
                        </table>
                        <br />
                        <h5>
                            <strong
                                >Table 2. Uncomplicated malaria: P. vivax or P.
                                ovale</strong
                            >
                        </h5>
                        <table class="table">
                            <tr>
                                <th>Drug Susceptibility</th>
                                <td>
                                    <strong>Recommended Adult Regimen</strong>
                                    <br />
                                    (BOTH acute and antirelapse treatments
                                    recommended)
                                </td>
                                <td>
                                    <strong
                                        >Recommended Pediatric Regimen</strong
                                    >
                                    <br />
                                    (BOTH acute and antirelapse treatments
                                    recommended)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Chloroquine sensitive</strong>
                                </td>
                                <td>
                                    <strong
                                        >Acute treatment: Chloroquine phosphate
                                        (Aralen and generics)</strong
                                    >
                                    <br />
                                    Dose 1: 600 mg base (1,000 mg salt) po Doses
                                    2 to 4 (3 additional doses) at 6, 24 and 48
                                    h: 300 mg base (500 mg salt) po per dose; or
                                    <br /><br />
                                    <strong
                                        >Hydroxychloroquine (Plaquenil and
                                        generics)</strong
                                    >
                                    <br />
                                    Dose 1: 620 mg base (800 mg salt) po Doses 2
                                    to 4 (3 additional doses) at 6, 24 and 48 h:
                                    310 mg base (400 mg salt) po per dose
                                    <br /><br />
                                    <strong
                                        >AND Antirelapse treatment: Primaquine
                                        phosphate</strong
                                    >
                                    <br />
                                    30 mg base po qd x 14 days; or
                                    <br /><br />
                                    <strong>Tafenoquine (Krintafel)</strong>
                                    <br />
                                    300 mg po x 1 dose
                                </td>
                                <td>
                                    <strong
                                        >Acute treatment: Chloroquine phosphate
                                        (Aralen and generics)</strong
                                    >
                                    <br />
                                    Dose 1: 10 mg base/kg (16.7 mg salt/kg) po
                                    Doses 2 to 4 (3 additional doses) at 6, 24
                                    and 48 h: 5 mg base/kg (8.3 mg salt/kg) po
                                    per dose; or
                                    <br /><br />
                                    <strong
                                        >Hydroxychloroquine (Plaquenil and
                                        generics)</strong
                                    >
                                    <br />
                                    Dose 1: 10 mg base/kg (12.9 mg salt/kg) po
                                    Doses 2 to 4 (3 additional doses) at 6, 24
                                    and 48 h: 5 mg base/kg (6.5 mg salt/kg) po
                                    per dose
                                    <br /><br />
                                    <strong
                                        >AND Antirelapse treatment: Primaquine
                                        phosphate</strong
                                    >
                                    <br />
                                    0.5 mg base/kg po qd x 14 days; or
                                    <br /><br />
                                    <strong>Tafenoquine (Krintafel)</strong>
                                    <br />
                                    300 mg po x 1 dose, only for patients ≥16
                                    years old
                                </td>
                            </tr>
                        </table>
                        <br />
                        <h5>
                            <strong
                                >Table 2. (continued) Uncomplicated malaria: P.
                                vivax or P. ovale</strong
                            >
                        </h5>
                        <table class="table">
                            <tr>
                                <th>Drug Susceptibility</th>
                                <td>
                                    <strong>Recommended Adult Regimens</strong>
                                    <br />(BOTH acute and antirelapse treatments
                                    recommended)
                                </td>
                                <td>
                                    <strong
                                        >Recommended Pediatric Regimens</strong
                                    >
                                    <br />
                                    (BOTH acute and antirelapse treatments
                                    recommended)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Chloroquine resistant</strong>
                                </td>
                                <td>
                                    <strong
                                        >Acute treatment: <br />
                                        A. Artemether-lumefantrine (Coartem)
                                    </strong>
                                    <br />
                                    <small
                                        >(1 tab: 20 mg artemether and 120 mg
                                        lumefantrine)
                                    </small>
                                    <br /><br />
                                    Adults: 4 tabs po per dose <br /><br />
                                    Three-day course: Day 1: Initial dose and
                                    second dose 8 h later Days 2 and 3: 1 dose
                                    BID
                                    <br />
                                    <br />
                                    <strong
                                        >B. Atovaquone-proguanil
                                        (Malarone)</strong
                                    >
                                    <br />
                                    <small
                                        >(Adult tab: 250 mg atovaquone and 100
                                        mg proguanil)
                                    </small>
                                    <br /><br />
                                    4 adult tabs po QD x 3 days
                                </td>
                                <td>
                                    <strong
                                        >Acute treatment: <br />
                                        A. Artemether-lumefantrine (Coartem)
                                    </strong>
                                    <br />
                                    <small
                                        >(1 tab: 20 mg artemether and 120 mg
                                        lumefantrine)
                                    </small>
                                    <br /><br />
                                    5-&lt;15 kg: 1 tab po per dose 15-&lt;25 kg:
                                    2 tabs po per dose 25-&lt;35 kg: 3 tabs po
                                    per dose ≥ 35 kg: 4 tabs po per dose
                                    <br /><br />
                                    Three-day course: Day 1: Initial dose and
                                    second dose 8 h later Days 2 and 3: 1 dose
                                    BID
                                    <br />
                                    <br /><strong
                                        >B. Atovaquone-proguanil
                                        (Malarone)</strong
                                    >
                                    <br />
                                    <small
                                        >(Adult tab: 250 mg atovaquone and 100
                                        mg proguanil; peds tab: 62.5 mg
                                        atovaquone and 25 mg proguanil)</small
                                    >
                                    <br /><br />
                                    5-&lt;8 kg: 2 peds tabs po QD x 3 days
                                    8-&lt;10 kg: 3 peds tabs po QD x 3 days
                                    10-&lt;20 kg: 1 adult tab po QD x 3 days
                                    20-&lt;30 kg: 2 adult tabs po QD x 3 days
                                    30-&lt;40 kg: 3 adult tabs po QD x 3 days ≥
                                    40 kg: 4 adult tabs po QD x 3 days
                                </td>
                            </tr>
                        </table>
                        <br />
                        <h5>
                            <strong
                                >Table 2. (continued) Uncomplicated malaria: P.
                                vivax or P. ovale</strong
                            >
                        </h5>
                        <table class="table">
                            <tr>
                                <th>Drug Susceptibility</th>
                                <td>
                                    <strong>Recommended Adult Regimens</strong>
                                    <br />
                                    (BOTH acute and antirelapse treatments
                                    recommended)
                                </td>
                                <td>
                                    <strong
                                        >Recommended Pediatric Regimens</strong
                                    >
                                    <br />
                                    (BOTH acute and antirelapse treatments
                                    recommended)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Chloroquine resistant</strong>
                                </td>
                                <td>
                                    <strong
                                        >C. Quinine sulfate plus doxycycline,
                                        tetracycline , or clindamycin
                                    </strong>
                                    <br />
                                    <br />
                                    Quinine sulfate: 542 mg base (650 mg salt)
                                    po TID x 3 days Doxycycline: 100 mg po BID x
                                    7 days Tetracycline: 250 mg po QID x 7 days
                                    Clindamycin: 20 mg/kg/day po divided TID x 7
                                    days
                                    <br /><br />
                                    <strong>D. Mefloquine</strong>
                                    <br />
                                    Dose 1: 684 mg base (750 mg salt) po Dose 2
                                    at 6 to 12 h: 456 mg base (500 mg salt) po
                                    <br /><br />
                                    <strong
                                        >AND Antirelapse treatment: Primaquine
                                        phosphate</strong
                                    ><br />
                                    30 mg base po qd x 14 days
                                </td>
                                <td>
                                    <strong
                                        >C. Quinine sulfate plus doxycycline,
                                        tetracycline , or clindamycin</strong
                                    >
                                    <br />
                                    <br />
                                    Quinine sulfate: 8.3 mg base/kg (10 mg
                                    salt/kg) po TID x 3 days Doxycycline: 2.2
                                    mg/kg po q12 h x 7 days Tetracycline: 25
                                    mg/kg/day po divided QID x 7 days
                                    Clindamycin: 20 mg /kg/day po divided TID x
                                    7 days <br /><br />
                                    <strong>D. Mefloquine</strong> <br />
                                    Dose 1: 13.7 mg base/kg (15 mg salt/kg) po
                                    Dose 2 at 6 to 12 h: 9.1 mg base/kg (10 mg
                                    salt/kg) po
                                    <br />
                                    <br />
                                    <strong
                                        >AND Antirelapse treatment: Primaquine
                                        phosphate</strong
                                    >

                                    <br />
                                    0.5 mg base/kg po qd x 14 days
                                </td>
                            </tr>
                        </table>
                        <br />
                        <h5>
                            <strong
                                >Table 3. Uncomplicated malaria: P. malariae or
                                P. knowlesi</strong
                            >
                        </h5>
                        <table class="table">
                            <tr>
                                <th>Drug Susceptibility</th>
                                <th>Recommended Adult Regimens</th>
                                <th>Recommended Pediatric Regimens</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Chloroquine sensitive</strong>
                                </td>
                                <td>
                                    <strong
                                        >A. Chloroquine phosphate (Aralen and
                                        generics)</strong
                                    >
                                    <br />
                                    Dose: 600 mg base (1,000 mg salt) po Doses 2
                                    to 4 (3 additional doses) at 6, 24 and 48 h:
                                    300 mg base (500 mg salt) po per dose; or
                                    <br /><br />
                                    <strong
                                        >Hydroxychloroquine (Plaquenil and
                                        generics)</strong
                                    ><br />
                                    Dose 1: 620 mg base (800 mg salt) po Doses 2
                                    to 4 (3 additional doses) at 6, 24 and 48 h:
                                    310 mg base (400 mg salt) po per dose
                                    <br /><br />
                                    <strong
                                        >B. Artemether-lumefantrine
                                        (Coartem)</strong
                                    ><br />
                                    <small
                                        >(1 tab: 20 mg artemether and 120 mg
                                        lumefantrine)
                                    </small>
                                    <br /><br />
                                    Adults: 4 tabs po per dose
                                    <br /><br />
                                    Three-day course: Day 1: Initial dose and
                                    second dose 8 h later Days 2 and 3: 1 dose
                                    BID
                                </td>
                                <td>
                                    <strong
                                        >A. Chloroquine phosphate (Aralen™ and
                                        generics)
                                    </strong>
                                    <br />
                                    Dose 1: 10 mg base/kg (16.7 mg salt/kg) po
                                    Doses 2 to 4 (3 additional doses) at 6, 24
                                    and 48 h: 5 mg base/kg (8.3 mg salt/kg) po
                                    per dose; or
                                    <br /><br />
                                    <strong
                                        >Hydroxychloroquine (Plaquenil and
                                        generics)</strong
                                    ><br />
                                    Dose 1: 10 mg base/kg (12.9 mg salt/kg) po
                                    Doses 2 to 4 (3 additional doses) at 6, 24
                                    and 48 h: 5 mg base/kg (6.5 mg salt/kg) po
                                    per dose
                                    <br /><br />
                                    <strong
                                        >B. Artemether-lumefantrine
                                        (Coartem)</strong
                                    ><br />
                                    <small
                                        >(1 tab: 20 mg artemether and 120 mg
                                        lumefantrine)
                                    </small>
                                    <br />
                                    <br />
                                    5-&lt;15 kg: 1 tab po per dose 15-&lt;25 kg:
                                    2 tabs po per dose 25-&lt;35 kg: 3 tabs po
                                    per dose ≥ 35 kg: 4 tabs po per dose
                                    <br /><br />
                                    Three-day course: Day 1: Initial dose and
                                    second dose 8 h later Days 2 and 3: 1 dose
                                    BID
                                </td>
                            </tr>
                        </table>
                        <br />
                        <h5>
                            <strong
                                >Table 3. (continued) Uncomplicated malaria: P.
                                malariae or P. knowlesi</strong
                            >
                        </h5>
                        <table class="table">
                            <tr>
                                <th>Drug Susceptibility</th>
                                <th>Recommended Adult Regimens</th>
                                <th>Recommended Pediatric Regimens</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Chloroquine sensitive</strong>
                                </td>
                                <td>
                                    <strong
                                        >C. Atovaquone-proguanil
                                        (Malarone)</strong
                                    >
                                    <br /><small
                                        >(Adult tab: 250 mg atovaquone and 100
                                        mg proguanil)
                                    </small>
                                    <br /><br />
                                    4 adult tabs po QD x 3 days
                                    <br /><br /><br />
                                    <strong
                                        >D. Quinine sulfate plus doxycycline,
                                        tetracycline, or clindamycin</strong
                                    >
                                    <br /><br />
                                    Quinine sulfate: 542 mg base (650 mg salt)
                                    po TID x 3 days Doxycycline: 100 mg po BID x
                                    7 days Tetracycline: 250 mg po QID x 7 days
                                    Clindamycin: 20 mg/kg/day po divided TID x 7
                                    days
                                    <br /><br />
                                    <strong>E. Mefloquine</strong> <br />
                                    Dose 1: 684 mg base (750 mg salt) po Dose 2
                                    at 6 to 12 h: 456 mg base (500 mg salt) po
                                </td>
                                <td>
                                    <strong
                                        >C. Atovaquone-proguanil
                                        (Malarone)</strong
                                    >
                                    <br />
                                    <small
                                        >(Adult tab: 250 mg atovaquone and 100
                                        mg proguanil; peds tab: 62.5 mg
                                        atovaquone and 25 mg proguanil)
                                    </small>
                                    <br /><br />
                                    5-&lt;8 kg: 2 peds tabs po QD x 3 days
                                    8-&lt;10 kg: 3 peds tabs po QD x 3 days
                                    10-&lt;20 kg: 1 adult tab po QD x 3 days
                                    20-&lt;30 kg: 2 adult tabs po QD x 3 days
                                    30-&lt;40 kg: 3 adult tabs po QD x 3 days
                                    ≥40 kg: 4 adult tabs po QD x 3 days
                                    <br /><br /><strong>
                                        D. Quinine sulfate plus doxycycline,
                                        tetracycline, or clindamycin
                                    </strong>
                                    <br /><br />
                                    Quinine sulfate: 8.3 mg base/kg (10 mg
                                    salt/kg) po TID x 3 days Doxycycline: 2.2
                                    mg/kg po BID x 7 days Tetracycline: 25
                                    mg/kg/day po divided QID x 7 days
                                    Clindamycin: 20 mg /kg/day po divided TID x
                                    7 days <br /><br />
                                    <strong>E. Mefloquine</strong><br />
                                    Dose 1: 13.7 mg base/kg (15 mg salt/kg) po
                                    Dose 2 at 6 to 12 h: 9.1 mg base/kg (10 mg
                                    salt/kg) po
                                </td>
                            </tr>
                        </table>
                        <br />
                        <h5>
                            <strong
                                >Table 4. Uncomplicated malaria: Pregnant
                                women</strong
                            >
                        </h5>
                        <table class="table">
                            <tr>
                                <th>Species and Drug Susceptibility</th>
                                <th>Recommended Adult Regimens</th>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Chloroquine resistant</strong>
                                    <br />
                                    <br />
                                    <strong>P. falciparum</strong>
                                    <br /><br />
                                    <strong>P. vivax or P. ovale</strong>
                                </td>
                                <td>
                                    <strong>
                                        Preferred for 2nd and 3rd trimesters:
                                        Artemether-lumefantrine (Coartem)
                                    </strong>
                                    <br />
                                    <small
                                        >(1 tab: 20 mg artemether and 120 mg
                                        lumefantrine)
                                    </small>
                                    <br /><br />
                                    Adults: 4 tabs po per dose
                                    <br /><br />
                                    Three-day course: Day 1: Initial dose and
                                    second dose 8 h later Days 2 and 3: 1 dose
                                    BID
                                    <br /><br />
                                    <strong
                                        >All trimesters: Quinine sulfate plus
                                        clindamycin </strong
                                    ><br />
                                    Quinine sulfate: 542 mg base (650 mg salt)
                                    po TID x 3 or 7 days5 Clindamycin: 20
                                    mg/kg/day po divided TID x 7 days
                                    <br /><br />
                                    <strong
                                        >If no other options, all trimesters:
                                        Mefloquine</strong
                                    >
                                    <br />
                                    Dose 1: 684 mg base (750 mg salt) po Dose 2
                                    at 6 to 12 h: 456 mg base (500 mg salt) po
                                    <br /><br />
                                    <strong>AND if P. vivax or P.ovale:</strong>
                                    <br />
                                    <strong>Chloroquine </strong> 500 mg salt
                                    (300 mg base) weekly until delivery, then
                                    consider antirelapse treatment (Table 2 for
                                    options and dosing) Antirelapse treatment
                                    with either primaquine or tafenoquine
                                    contraindicated during pregnancy
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Chloroquine sensitive</strong>
                                    <br />
                                    <br />
                                    <strong>P. falciparum</strong>
                                    <br /><br />
                                    <strong> P. vivax or P. ovale </strong>
                                    <br /><br />
                                    <strong>P. malariae or P. knowlesi</strong>
                                </td>
                                <td>
                                    <strong
                                        >A. Chloroquine phosphate (Aralen and
                                        generics) </strong
                                    ><br />
                                    Dose 1: 600 mg base (1,000 mg salt) po Doses
                                    2 to 4 (3 additional doses) at 6, 24 and 48
                                    h: 300 mg base (500 mg salt) po per dose; or
                                    <br /><br />
                                    <strong
                                        >Hydroxychloroquine (Plaquenil and
                                        generics)</strong
                                    >
                                    <br />
                                    Dose 1: 620 mg base (800 mg salt) po Doses 2
                                    to 4 (3 additional doses) at 6, 24 and 48 h:
                                    310 mg base (400 mg salt) po per dose
                                    <br /><br />
                                    <strong
                                        >Options above for chloroquine-resistant
                                        malaria parasites</strong
                                    >
                                    <br /><br />
                                    <strong>AND if P. vivax or P.ovale:</strong>
                                    <br />
                                    <strong>Chloroquine </strong> 500 mg salt
                                    (300 mg base) weekly until delivery, then
                                    consider antirelapse treatment (Table 2 for
                                    options and dosing) Antirelapse treatment
                                    with either primaquine or tafenoquine
                                    contraindicated during pregnancy
                                </td>
                            </tr>
                        </table>
                        <br />
                        <h5>
                            <strong>Table 5: Severe malaria</strong>
                        </h5>
                        <table class="table">
                            <tr>
                                <th>Species and Drug Susceptibility</th>
                                <th>Recommended Adult Regimen</th>
                                <th>Recommended Pediatric Regimen</th>
                            </tr>
                            <tr>
                                <td rowspan="3">
                                    All species, drug susceptibility not
                                    relevant for acute treatment of severe
                                    malaria
                                    <br /><br />
                                    If P. vivax or P. ovale infections, in
                                    addition to acute treatment listed here,
                                    antirelapse treatment needed (Table 2)
                                </td>
                                <td colspan="2">
                                    <strong>IV artesunate: </strong>:
                                    Commercially available from major
                                    distributors. 1 dose=2.4 mg/kg <br /><br />
                                    IV doses (3 in total) at 0, 12 and 24 hours
                                    <br /><br />
                                    <strong
                                        >PLUS follow-on treatment below</strong
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <strong
                                        >If IV artesunate not readily available,
                                        give oral antimalarials while obtaining
                                        IV artesunate.</strong
                                    >
                                    When IV artesunate arrives, discontinue oral
                                    antimalarial and initiate IV treatment.
                                    Interim treatment options (Table 1 for
                                    dosing): <br />
                                    • Artemether-lumefantrine (Coarte®)
                                    (preferred); or <br />
                                    • Atovaquone-proguanil (Malarone™); or
                                    <br />
                                    • Quinine sulfate; or <br />
                                    • Mefloquine (only if no other options
                                    available) <br /><br />
                                    If oral therapy not tolerated, consider
                                    administration via nasogastric (NG) tube or
                                    after an antiemetic.
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <strong
                                        >Reassess parasite density at least 4
                                        hours after the third dose: Parasite
                                        density ≤1% and patient able to tolerate
                                        oral medications:
                                    </strong>
                                    Give a complete follow-on oral regimen.
                                    Options include (Table 1 for dosing):
                                    <br />
                                    • Artemether-lumefantrine (Coartem®)
                                    (preferred), or <br />
                                    • Atovaquone-proguanil (Malarone™), or
                                    <br />
                                    • Quinine plus doxycycline or, in children
                                    &lt;8 years old and pregnant women,
                                    clindamycin, or
                                    <br />
                                    • Mefloquine (only if no other options
                                    available) <br /><br />
                                    <strong>Parasite density >1%: </strong>:
                                    Continue IV artesunate, same dose, QD up to
                                    6 more days (for a total of 7 days of IV
                                    artesunate) until parasite density ≤1%. When
                                    parasite density ≤1%, give complete
                                    follow-on oral regimen (Table 1 for options
                                    and dosing). <br /><br />
                                    <strong
                                        >Parasite density ≤1% but patient unable
                                        to take oral medication:</strong
                                    >
                                    Continue IV artesunate, same dose, QD up to
                                    6 more days (for a total of 7 days of IV
                                    artesunate) until patient able to take oral
                                    therapy.
                                </td>
                            </tr>
                        </table>
                        <br />
                        <!-- <p class="small">
                            Source:
                            <a
                                href="https://www.cdc.gov/malaria/resources/pdf/Malaria_Treatment_Table_202208.pdf"
                                class="source"
                                >www.cdc.gov Malaria Treatment Table</a
                            > 
                        </p> -->
                    </div>
                    <div class="container tab-pane fade" id="dengue">
                        <h2 class="sub-title">Dengue</h2>
                        <br />
                        <h3 class="disease">Treatment</h3>
                        <br />
                        <ul>
                            <li>
                                There is no specific medicine to treat dengue.
                            </li>
                            <li>
                                treat the symptoms of dengue and see your
                                healthcare provider.
                            </li>
                        </ul>
                        <br />
                        <h3 class="disease">Symptoms</h3>
                        <br />
                        <ul>
                            <li>
                                Mild symptoms of dengue can be confused with
                                other illnesses that cause fever, aches and
                                pains, or a rash.
                            </li>
                            <br />
                            <p>
                                The most common symptom of dengue is
                                <strong>fever</strong> with any of the
                                following:
                            </p>
                            <li>Nausea, vomiting</li>
                            <li>Rash</li>
                            <li>
                                Aches and pains (eye pain, typically behind the
                                eyes, muscle, joint, or bone pain)
                            </li>
                            <li>Any <a href="#source">warning sign</a></li>
                            <p>
                                Symptoms of dengue typically last 2-7 days. Most
                                people will recover after about a week.
                            </p>
                        </ul>
                        <br />
                        <h3 class="disease">
                            <a
                                href="https://www.cdc.gov/dengue/resources/factsheets/homeCareenglish.pdf"
                                class="source"
                                >If you think you have dengue [PDF - 1 page]</a
                            >
                        </h3>
                        <ul>
                            <li>
                                See a healthcare provider if you develop a fever
                                or have symptoms of dengue. Tell him or her
                                about your travel.
                            </li>
                            <li><strong>Rest</strong> as much as possible.</li>
                            <li>
                                <strong>Take acetaminophen</strong> (also known
                                as paracetamol outside of the United States) to
                                control fever and relieve pain.
                                <ul>
                                    <li>Do not take aspirin or ibuprofen!</li>
                                </ul>
                            </li>
                            <li>
                                <strong>Drink plenty of fluids</strong> to stay
                                hydrated. Drink water or drinks with added
                                electrolytes.
                            </li>
                            <li>
                                For mild symptoms, care for a sick
                                <a
                                    href="https://www.cdc.gov/dengue/symptoms/infant.html"
                                    >infant</a
                                >,
                                <a
                                    href="https://www.cdc.gov/dengue/symptoms/family.html"
                                    >child or family member</a
                                >, at home.
                            </li>
                            <br />
                            <p class="highlight">
                                <strong>
                                    Symptoms of dengue can become severe within
                                    a few hours. Severe dengue is a medical
                                    emergency.</strong
                                >
                            </p>
                        </ul>
                        <br />
                        <h3 class="disease">Severe dengue</h3>
                        <br />

                        <ul>
                            <li>
                                About 1 in 20 people who get sick with dengue
                                will develop severe dengue.
                            </li>
                            <li>
                                Severe dengue can result in shock, internal
                                bleeding, and even death.
                            </li>
                            <li>
                                If you have had dengue in the past, you are more
                                likely to develop severe dengue.
                            </li>
                            <li>
                                Infants and pregnant women are at higher risk
                                for developing severe dengue.
                            </li>
                        </ul>
                        <br />
                        <h3>Symptoms of Severe Dengue</h3>
                        <br />
                        <p><strong>Warning signs of severe dengue</strong></p>

                        <p>
                            Watch for signs and symptoms of severe dengue.
                            Warning signs usually begin in the 24-48 hours after
                            your fever has gone away.
                        </p>
                        <p>
                            Immediately go to a local clinic or emergency room
                            if you or a family member has any of the following
                            symptoms.
                        </p>
                        <ul>
                            <li>Belly pain, tenderness</li>
                            <li>Vomiting (at least 3 times in 24 hours)</li>
                            <li>Bleeding from the nose or gums</li>
                            <li>Vomiting blood, or blood in the stool</li>
                            <li>Feeling tired, restless, or irritable</li>
                        </ul>
                        <br />
                        <h3>Treatment for severe dengue</h3>
                        <br />
                        <ul>
                            <li>
                                If you have any warning signs, see a healthcare
                                provider or go to the emergency room
                                immediately.
                            </li>
                            <li>
                                Severe dengue is a medical emergency. It
                                requires immediate medical care at a clinic or
                                hospital.
                            </li>
                            <li>
                                If you are traveling,
                                <a
                                    href="https://wwwnc.cdc.gov/travel/page/health-care-during-travel"
                                    >find health care abroad</a
                                >.
                            </li>
                        </ul>
                        <!-- <p class="small">
                            Content source:
                            <a
                                href="https://www.cdc.gov/"
                                class="source"
                                id="source"
                            >
                                Centers for Disease Control and Prevention,
                                National Center for Emerging and Zoonotic
                                Infectious Diseases (NCEZID), Division of
                                Vector-Borne Diseases (DVBD)</a
                            > 
                        </p> -->
                    </div>
                    <div class="tab-pane face" id="leptos">
                        <h2 class="sub-title">Leptospirosis</h2>
                        <br />
                        <h3 class="disease">Treatment</h3>
                        <br />
                        <ul>
                            <li>
                                Leptospirosis is treated with antibiotics, such
                                as doxycycline or penicillin, which should be
                                given early in the course of the disease.
                            </li>
                            <li>
                                Intravenous antibiotics may be required for
                                persons with more severe symptoms. Persons with
                                symptoms suggestive of leptospirosis should
                                contact a health care provider.
                            </li>
                        </ul>
                        <br />
                        <h3 class="disease">Signs and Symptoms</h3>
                        <br />
                        <p>
                            In humans, Leptospirosis can cause a wide range of
                            symptoms, including:
                        </p>
                        <ul>
                            <li>High fever</li>
                            <li>Headache</li>
                            <li>Chills</li>
                            <li>Muscle aches</li>
                            <li>Vomiting</li>
                            <li>Jaundice (yellow skin and eyes)</li>
                            <li>Red eyes</li>
                            <li>Abdominal pain</li>
                            <li>Diarrhea</li>
                            <li>Rash</li>
                        </ul>
                        <br />
                        <p>
                            Many of these symptoms can be mistaken for other
                            diseases. In addition, some infected persons may
                            have no symptoms at all.
                        </p>
                        <p>
                            The time between a person's exposure to a
                            contaminated source and becoming sick is 2 days to 4
                            weeks. Illness usually begins abruptly with fever
                            and other symptoms. Leptospirosis may occur in two
                            phases:
                        </p>
                        <ul>
                            <li>
                                After the first phase (with fever, chills,
                                headache, muscle aches, vomiting, or diarrhea)
                                the patient may recover for a time but become
                                ill again.
                            </li>
                            <li>
                                If a second phase occurs, it is more severe; the
                                person may have kidney or liver failure or
                                meningitis.
                            </li>
                        </ul>
                        <br />
                        <p>
                            The illness lasts from a few days to 3 weeks or
                            longer. Without treatment, recovery may take several
                            months.
                        </p>
                        <!-- <p class="small">
                            Content source:
                            <a href="https://www.cdc.gov/" class="source"
                                >Centers for Disease Control and Prevention,
                                National Center for Emerging and Zoonotic
                                Infectious Diseases (NCEZID), Division of
                                High-Consequence Pathogens and Pathology
                                (DHCPP)</a
                            >
                        </p> -->
                        <br />
                        <h3 class="disease">Signs and Symptoms in Pets</h3>
                        <br />
                        <p>
                            The clinical signs of leptospirosis vary and are
                            nonspecific. Sometimes pets do not have any
                            symptoms. Common clinical signs have been reported
                            in dogs. These include:
                        </p>
                        <br />
                        <ul>
                            <li>Fever</li>
                            <li>Vomiting</li>
                            <li>Abdominal pain</li>
                            <li>Diarrhea</li>
                            <li>Refusal to eat</li>
                            <li>Severe weakness and depression</li>
                            <li>Stiffness</li>
                            <li>Severe muscle pain</li>
                            <li>Inability to have puppies</li>
                        </ul>
                        <br />
                        <p>
                            Generally younger animals are more seriously
                            affected than older animals.
                        </p>
                        <p>
                            If you think your pet may have Leptospirosis,
                            contact your veterinarian immediately. Your
                            veterinarian can perform tests to determine whether
                            or not your pet has the disease.
                        </p>
                        <!-- <p class="small">
                            Content source:
                            <a
                                href="https://www.cdc.gov/ncezid/index.html"
                                class="source"
                                >Centers for Disease Control and Prevention,
                                National Center for Emerging and Zoonotic
                                Infectious Diseases (NCEZID), Division of
                                High-Consequence Pathogens and Pathology
                                (DHCPP)</a
                            >
                        </p> -->
                    </div>
                    <div class="tab-pane fade" id="typhoid">
                        <h3 class="sub-title">
                            Typhoid Fever (Salmonella Typhi)
                        </h3>
                        <br />
                        <h3 class="disease">Symptoms and Treatment</h3>
                        <br />
                        <p>
                            <strong
                                >What are the signs and symptoms of typhoid
                                fever and paratyphoid fever?</strong
                            >
                        </p>
                        <p>
                            Typhoid fever and paratyphoid fever have similar
                            symptoms. People usually have a sustained fever that
                            can be as high as 103-104°F (39-40°C). A sustained
                            fever is a fever that does not come and go.
                        </p>
                        <p>
                            Other symptoms of typhoid fever and paratyphoid
                            fever include
                        </p>
                        <ul>
                            <li>Weakness</li>
                            <li>Stomach pain</li>
                            <li>Headache</li>
                            <li>Diarrhea or constipation</li>
                            <li>Cough</li>
                            <li>Loss of appetite</li>
                        </ul>
                        <p>
                            Some people with typhoid fever or paratyphoid fever
                            develop a rash of flat, rose-colored spots.
                        </p>
                        <br />
                        <p>
                            <strong
                                >What do you do if you think you have typhoid
                                fever or paratyphoid fever?</strong
                            >
                        </p>
                        <p>
                            The only way to know for sure is to have a sample of
                            blood or stool (poop) tested for Salmonella Typhi or
                            Salmonella Paratyphi.
                        </p>
                        <br />
                        <p>
                            <strong
                                >If you have a fever and feel very ill, see a
                                doctor immediately.</strong
                            >
                            If you are traveling outside the United States and
                            need help finding health care, visit CDC's webpage
                            about
                            <a
                                href="https://wwwnc.cdc.gov/travel/page/health-care-during-travel"
                                >Getting Health Care Durnig Travel</a
                            >.
                        </p>
                        <br />
                        <p>
                            <strong
                                >How are typhoid fever and paratyphoid fever
                                treated?</strong
                            >
                        </p>
                        <p>
                            Antibiotics treat typhoid fever and paratyphoid
                            fever.
                        </p>
                        <p>
                            <a
                                href="https://www.cdc.gov/drugresistance/pdf/threats-report/salmonella-typhi-508.pdf"
                                >Resistance to antibiotics is increasing. [PDF -
                                516 KB]</a
                            >
                            in the bacteria that cause these diseases. Resistant
                            bacteria have developed the ability to defeat drugs
                            designed to kill them. Your doctor may order special
                            tests to see if the bacteria causing your infection
                            are resistant. Results from those tests may affect
                            what antibiotic treatment you receive.
                        </p>
                        <p>
                            People who do not get appropriate antibiotic
                            treatment may have fever for weeks or months and may
                            develop other health problems. People who do not get
                            treatment can die from these health problems.
                        </p>
                        <br />
                        <p>
                            <strong
                                >The danger from typhoid fever or paratyphoid
                                fever doesn't end when symptoms
                                disappear.</strong
                            >
                        </p>
                        <p>
                            Even if your symptoms seem to go away, you may still
                            be carrying Salmonella Typhi or Salmonella
                            Paratyphi. If so, the illness could return, or you
                            could pass the bacteria to other people. Some people
                            may not be able to return to work until a doctor
                            says they no longer carry the bacteria. These people
                            include healthcare workers, food handlers, and
                            childcare workers.
                        </p>
                        <br />
                        <p>
                            If you are being treated for typhoid fever or
                            paratyphoid fever, these steps can lower the chance
                            of passing the bacteria to someone else.
                        </p>

                        <ul>
                            <li>
                                Keep taking antibiotics for as long as the
                                doctor has recommended.
                            </li>
                            <li>
                                Wash your hands carefully with soap and water
                                after using the bathroom.
                            </li>
                            <li>
                                Do not prepare or serve food for other people.
                            </li>
                        </ul>
                        <br />
                        <!-- <p class="small">
                            Source:
                            <a href="https://www.cdc.gov/" class="source"
                                >Centers for Disease Control and Prevention ,
                                National Center for Emerging and Zoonotic
                                Infectious Diseases (NCEZID) , Division of
                                Foodborne, Waterborne, and Environmental
                                Diseases (DFWED)</a
                            >
                        </p> -->
                    </div>
                    <div class="tab-pane fade" id="filariasis">
                        <h2 class="sub-title">Lymphiatic Filariasis</h2>
                        <br />
                        <h3 class="disease">Treatment</h3>
                        <br />
                        <p>
                            <strong
                                >Patients currently infected with the
                                parasite</strong
                            >
                        </p>
                        <p>
                            Diethylcarbamazine (DEC) is the drug of choice in
                            the United States. The drug kills the microfilariae
                            and some of the adult worms. DEC has been used
                            world-wide for more than 50 years. Because this
                            infection is rare in the U.S., the drug is no longer
                            approved by the Food and Drug Administration (FDA)
                            and cannot be sold in the U.S. Physicians can obtain
                            the medication from CDC after confirmed positive lab
                            results. CDC gives the physicians the choice between
                            1 or 12-day treatment of DEC (6 mg/kg/day). One day
                            treatment is generally as effective as the 12-day
                            regimen. DEC is generally well tolerated. Side
                            effects are in general limited and depend on the
                            number of microfilariae in the blood. The most
                            common side effects are dizziness, nausea, fever,
                            headache, or pain in muscles or joints.
                        </p>
                        <p>
                            DEC should not be administered to patients who may
                            also have onchocerciasis as DEC can worsen
                            onchocercal eye disease. In patients with loiasis,
                            DEC can cause serious adverse reactions, including
                            encephalopathy and death. The risk and severity of
                            the adverse reactions are related to Loa loa
                            microfilarial density.
                        </p>
                        <p>
                            In settings where onchoceriasis is present,
                            Ivermectin is the drug of choice to treat LF.
                        </p>
                        <p>
                            Some studies have shown adult worm killing with
                            treatment with doxycycline (200mg/day for 4-6
                            weeks).
                        </p>
                        <br />
                        <p>
                            <strong>Patients with clinical symptoms</strong>
                        </p>
                        <p>
                            People with lymphedema and elephantiasis are
                            unlikely to benefit from DEC treatment because most
                            people with lymphedema are not actively infected
                            with the filarial parasite.
                        </p>
                        <p>
                            To prevent lymphedema from getting worse, patients
                            should ask their physician for a referral to a
                            lymphedema therapist so they can be informed about
                            some basic principles of care such as hygiene,
                            elevation, exercises,skin and wound care, and
                            wearing appropriate shoes.
                        </p>
                        <p>
                            Patients with hydrocele may have evidence of active
                            infection, but typically do not improve clinically
                            following treatment with DEC. The treatment for
                            hydrocele is surgery.
                        </p>
                        <p>
                            There is some evidence that suggests that a course
                            of the antibiotic doxycycline may prevent lymphedema
                            from getting worse.
                        </p>
                        <br />
                        <!-- <p class="small">
                            Content source:
                            <a
                                href="https://www.cdc.gov/globalhealth/"
                                class="source"
                                >Global Health, Division of Parasitic Diseases
                                and Malaria</a
                            >
                        </p> -->
                    </div>
                    <div class="tab-pane fade" id="diarrhea">
                        <h3 class="sub-title">Diarrhea</h3>
                        <br />
                        <h2 class="disease">Diagnostic and Treatment</h2>
                        <br />
                        <p><strong>How can diarrhea be diagnosed?</strong></p>
                        <p>
                            Because the etiologic agent is unknown, there is no
                            laboratory test that can confirm the diagnosis.
                            Brainerd diarrhea should be suspected in any patient
                            who presents with the acute onset of nonbloody
                            diarrhea lasting for more than 4 weeks, and for whom
                            stool cultures and examinations for ova and
                            parasites have been negative. Care should be taken
                            to exclude other causes of chronic diarrhea, both
                            infectious and noninfectious (e.g., lymphocytic
                            colitis, collagenous colitis, tumors, drug
                            reactions). Brainerd diarrhea is not characterized
                            by any specific laboratory abnormalities. On
                            colonoscopy, petechiae, aphthous ulcers, and
                            erythema may be observed. Microscopic examination of
                            colonic tissue biopsy specimens often reveals mild
                            inflammation, with an increased number of
                            lymphocytes, particularly in the ascending and
                            transverse colon. The stomach and small intestine
                            generally appear normal.
                        </p>
                        <p><strong>How can diarrhea be treated?</strong></p>
                        <p>
                            There is no known curative treatment for Brainerd
                            diarrhea. A variety of antimicrobial agents have
                            been tried without success, including
                            trimethoprim-sulfamethoxazole, ciprofloxacin,
                            doxycycline, ampicillin, metronidazole, and
                            paromomycin. Neither has there been any response to
                            steroids or antiinflammatory agents. Approximately
                            50% of patients report some relief in symptoms with
                            high doses of opioid antimotility drugs, such as
                            loperamide, diphenoxylate, and paregoric.
                        </p>
                        <!-- <p class="small">
                            Content source:
                            <a href="https://www.cdc.gov/" class="source">
                                Centers for Disease Control and Prevention,
                                National Center for Emerging and Zoonotic
                                Infectious Diseases (NCEZID), Division of
                                Foodborne, Waterborne, and Environmental
                                Diseases (DFWED)</a
                            >
                        </p> -->
                    </div>
                    <div class="tab-pane fade" id="chickenpox">
                        <h3 class="sub-title">Chicken Pox</h3>
                        <br />
                        <h3 class="disease">Prevention and Treatment</h3>
                        <br />
                        <p><strong>Prevention</strong></p>
                        <p>
                            The best way to prevent chickenpox is to get the
                            chickenpox vaccine. Everyone—including children,
                            adolescents, and adults—should get two doses of
                            chickenpox vaccine if they have never had chickenpox
                            or were never vaccinated.
                        </p>

                        <br />
                        <p>
                            Chickenpox vaccine is very safe and effective at
                            preventing the disease. Most people who get the
                            vaccine will not get chickenpox. If a vaccinated
                            person does get chickenpox, the symptoms are usually
                            milder with fewer or no blisters (they may have just
                            red spots) and low or no fever.
                        </p>
                        <p>
                            The chickenpox vaccine prevents almost all cases of
                            severe illness. Since the
                            <a
                                href="https://www.cdc.gov/chickenpox/vaccination-program-impact.html"
                                >chickenpox vaccination program</a
                            >
                            began in the United States, there has been over 97%
                            decrease in chickenpox cases. Hospitalizations and
                            deaths have become rare.
                        </p>
                        <p>
                            For more information about chickenpox vaccine, see
                            <a
                                href="https://www.cdc.gov/chickenpox/vaccination.html"
                                >Vaccination</a
                            >.
                        </p>
                        <br />
                        <p>
                            <strong
                                >Treatments at Home for People with
                                Chickenpox</strong
                            >
                        </p>
                        <p>
                            There are several things that you can do at home to
                            help relieve chickenpox symptoms and prevent skin
                            infections. Calamine lotion and a cool bath with
                            added baking soda, uncooked oatmeal, or colloidal
                            oatmeal may help relieve some of the itching. Try to
                            keep fingernails trimmed short and minimize
                            scratching to prevent the virus from spreading to
                            others and to help prevent skin infections. If you
                            do scratch a blister by accident,
                            <a
                                href="https://www.cdc.gov/handwashing/when-how-handwashing.html"
                                >wash your hands</a
                            >
                            with soap and water for at least 20 seconds.
                        </p>
                        <br />
                        <p>
                            <strong>Over-the-counter Medications</strong>
                        </p>
                        <p>
                            Do not use aspirin or aspirin-containing products to
                            relieve fever from chickenpox. The use of aspirin in
                            children with chickenpox has been associated with
                            Reye's syndrome, a severe disease that affects the
                            liver and brain and can cause death. Instead, use
                            non-aspirin medications, such as acetaminophen, to
                            relieve fever from chickenpox. The American Academy
                            of Pediatrics recommends avoiding treatment with
                            ibuprofen if possible because it has been associated
                            with life-threatening bacterial skin infections.
                        </p>
                        <br />
                        <p>
                            <strong>When to Call a Healthcare Provider</strong>
                        </p>
                        <p>
                            For people exposed to chickenpox or shingles, call a
                            healthcare provider if the person:
                        </p>
                        <ul>
                            <li>
                                Has never had chickenpox and is not vaccinated
                                with the chickenpox vaccine
                            </li>
                            <li>Is pregnant</li>
                            <li>
                                Has a lowered ability to fight germs and
                                sickness (weakened immune system) caused by
                                disease or medication; for example:
                            </li>
                            <ul>
                                <li>A person with HIV/AIDS or cancer</li>
                                <li>A person who has had a transplant</li>
                                <li>
                                    A person on chemotherapy, immunosuppressive
                                    medications, or long-term use of steroids
                                </li>
                            </ul>
                            <p>
                                If you have symptoms, call your healthcare
                                provider. Contacting a healthcare provider is
                                especially important if the person:
                            </p>
                            <ol>
                                <li>
                                    Is at risk of serious complications from
                                    chickenpox because they:
                                </li>
                                <ul>
                                    <li>Are less than 1 year old</li>
                                    <li>Are older than 12 years of age</li>
                                    <li>Have a weakened immune system</li>
                                    <li>Are pregnant</li>
                                </ul>
                                <p>OR</p>
                                <li>Develops any of the following symptoms:</li>
                                <ul>
                                    <li>Fever that lasts longer than 4 days</li>
                                    <li>
                                        Fever that rises above 102°f (38.9°c)
                                    </li>
                                    <li>
                                        Any areas of the rash or any part of the
                                        body becomes very red, warm, or tender,
                                        or begins leaking pus (thick, discolored
                                        fluid), as these symptoms may indicate a
                                        bacterial infection
                                    </li>
                                    <li>
                                        Difficulty waking up or confused
                                        behavior
                                    </li>
                                    <li>Difficulty walking</li>
                                    <li>Stiff neck</li>
                                    <li>Frequent vomiting</li>
                                    <li>Difficulty breathing</li>
                                    <li>Severe cough</li>
                                    <li>Severe abdominal pain</li>
                                    <li>
                                        Rash with bleeding or bruising
                                        (hemorrhagic rash)
                                    </li>
                                </ul>
                            </ol>
                        </ul>

                        <p>
                            <strong
                                >Treatments Prescribed by Your Healthcare
                                Provider for People with Chickenpox</strong
                            >
                        </p>
                        <p>
                            Your healthcare provider can advise you on treatment
                            options. Antiviral medications are recommended for
                            people with chickenpox that are more likely to
                            develop serious illness, including:
                        </p>
                        <ul>
                            <li>
                                Otherwise healthy people older than 12 years of
                                age
                            </li>
                            <li>People with chronic skin or lung disease</li>
                            <li>
                                People receiving long-term salicylate therapy or
                                steroid therapy
                            </li>
                            <li>People who are pregnant</li>
                            <li>People with a weakened immune system</li>
                        </ul>
                        <p>
                            There are antiviral medications licensed for
                            treatment of chickenpox. The medication works best
                            if it is given as early as possible, preferably
                            within the first 24 hours after the rash starts. For
                            more information, see
                            <a
                                href="https://www.cdc.gov/chickenpox/hcp/index.html#managing-high-risk"
                                >Acyclovir Treatment</a
                            >.
                        </p>
                        <!-- <p class="small">
                            Source:
                            <a
                                href="https://www.cdc.gov/ncird/index.html"
                                class="source"
                                >National Center for Immunization and
                                Respiratory Diseases (NCIRD), Division of Viral
                                Diseases</a
                            >
                        </p> -->
                    </div>
                </div>
                <br />
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
