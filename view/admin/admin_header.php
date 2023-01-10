<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Admin GGP
    </title>
    <script async src="js/calendar.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="./view/style/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="./view/style/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/m995pb24o07hubqacibw5bzdfas3misqw2fty0qcc7h4dg7s/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>

    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><span>Admin Panel</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="?cat=admin" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <div class="small-screen navbar-display">

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="?cat=admin"><i class="material-icons">apps</i><span>apps</span></a>
                    </li>
                    <?php
                    if ($_SESSION['user_role'] == 2) {
                    ?>
                        <li>
                            <a href="?cat=admin&op=readHomepageItems&page=1"><i class="material-icons">visibility</i> <span>Overzicht home</span> </a>
                        </li>
                    <?php
                    }
                    if ($_SESSION['user_role'] == 2) {
                    ?>
                        <li>
                            <a href="?cat=admin&op=readDisclaimerItems&page=2"><i class="material-icons">visibility</i> <span>Overzicht disclaimer</span> </a>
                        </li>
                    <?php
                    }

                    if ($_SESSION['user_role'] == 2) {
                    ?>
                        <li>
                            <a href="?cat=admin&op=activeCinemas"><i class="material-icons">visibility</i> <span>Overzicht bioscopen</span> </a>
                        </li>
                    <?php
                    }
                    if ($_SESSION['user_role'] == 2) {
                    ?>
                        <li>
                            <a href="?cat=admin&op=checkCinema"><i class="material-icons">check</i> <span>Keur bioscopen goed</span> </a>
                        </li>
                    <?php
                    }


                    ?>
                    <li>
                        <a href="?cat=admin&op=editCinemaPage"><i class="material-icons">edit</i><span>Wijzig bioscoop</span> </a>
                    </li>
            </ul>

        </nav>



        <!-- Page Content  -->
        <div id="content">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="#"> Dashboard </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="dropdown nav-item active">
                                    <a href="?cat=auth&op=logout" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>