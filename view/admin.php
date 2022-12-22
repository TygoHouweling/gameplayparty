<!-- 
ADMIN PANEL
MADE BY: NATHANAEL DOUSA
2022
-->
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
    <script src="https://cdn.tiny.cloud/1/magepb1tdsd8blvlls87gx4g4rjkfjopfhedmlg4i5yt0am2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- TINYMCE -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
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
                    <a href="#" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons">notifications</i><span> 4 notification</span></a>
                        <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                            <li>
                                <a href="#">You have 5 new messages</a>
                            </li>
                            <li>
                                <a href="#">You're now friend with Mike</a>
                            </li>
                            <li>
                                <a href="#">Wish Mary on her birthday!</a>
                            </li>
                            <li>
                                <a href="#">5 warnings in Server Console</a>
                            </li>
                        </ul>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a data-toggle="modal" data-target="#myModal"><i class="material-icons">person</i><span>user</span></a>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                    </li>
                </div>

                <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">content_copy</i><span>Content Manager</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li>
                            <a href="?cat=admin&op=editHomepage">Wijzig start pagina</a>
                        </li>
                        <?php
                        if ($_SESSION['user_role'] == 1) {
                        ?>
                            <li>
                                <a href="?cat=admin&op=editCinema">Wijzig bioscoop</a>
                            </li>
                        <?php
                        }

                        if ($_SESSION['user_role'] == 2) {
                        ?>
                            <li>
                                <a href="?cat=admin&op=overviewCinema">Overzicht bioscopen</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                <li>
                    <a href="?cat=home&op=createCinema">Voeg bioscoop toe</a>
                </li>
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
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">notifications</span>
                                        <span class="notification">4</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">You have 5 new messages</a>
                                        </li>
                                        <li>
                                            <a href="#">You're now friend with Mike</a>
                                        </li>
                                        <li>
                                            <a href="#">Wish Mary on her birthday!</a>
                                        </li>
                                        <li>
                                            <a href="#">5 warnings in Server Console</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">apps</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">
                                        <span class="material-icons">person</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="main-content">

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">equalizer</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Visits</strong></p>
                                <h3 class="card-title"><?= $visits ?></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-info">info</i>
                                    <a href="" data-toggle="modal" data-target="#myModal1">See detailed report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-symbols-outlined">
                                        favorite
                                    </span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Likes</strong></p>
                                <h3 class="card-title"><?= $likes ?></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> All likes
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">
                                        attach_money
                                    </span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Revenue</strong></p>
                                <h3 class="card-title">$23,100</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Weekly sales
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">

                                    <span class="material-icons">
                                        follow_the_signs
                                    </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Users</strong></p>
                                <h3 class="card-title"><?= $accounts ?></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo $adminUsers1 ?>
                <div class="col-lg-5 col-md-12">
                    <div class="card" style="min-height: 485px">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">Appointments <?php if (isset($_GET['em'])) {
                                                                    $em = "(" . $_GET['em'] . ")";
                                                                } else {
                                                                    $em = "";
                                                                }
                                                                echo $em; ?></h4>
                        </div>
                        <?= $tournaments1 ?>
                    </div>
                </div>
            </div>






        </div>



    </div>
    </div>



    <div id="calendar" class="calendar"></div>



    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">User settings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-default" onclick="window.open('index.php','_self')">Go back to main site</button>
                    <button type="button" class="btn btn-default" onclick="window.open('?op=logout','_self')">Logout</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal calender -->
    <div class="modal fade" id="myModal7" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">User settings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body d-flex justify-content-start">
                    <!-- Page Content  -->
                    <div id="content">
                        <div id="cal-wrap">
                            <!-- (A) PERIOD SELECTOR -->
                            <div id="cal-date">
                                <select id="cal-mth"></select>
                                <select id="cal-yr"></select>
                            </div>

                            <!-- (B) CALENDAR -->
                            <div id="cal-container"></div>

                            <!-- (C) EVENT FORM -->
                            <form id="cal-event">
                                <h1 id="evt-head"></h1>
                                <div id="evt-date"></div>
                                <textarea id="evt-details" required></textarea>
                                <input id="evt-close" type="button" value="Close" />
                                <input id="evt-del" type="button" value="Delete" />
                                <input id="evt-save" type="submit" value="Save" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal admin-->
    <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Add admin</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input onkeyup="checkpass()" type="text" class="form-control" id="password" placeholder="Password">
                            <label id="output"></label>
                        </div>
                        <button onclick="addAdmin();" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <span id="status"></span>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal edit-->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Edit Content</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="number" class="form-control" id="test" placeholder="ID" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name Tournament</label>
                            <input type="text" class="form-control" id="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Website</label>
                            <input type="text" class="form-control" id="web" placeholder="desc">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Message</label>
                            <input type="text" class="form-control" id="message" placeholder="desc">
                        </div>
                        <button onclick="editConfirm();" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <span id="status1"></span>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal create-->
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Edit Content</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="number" class="form-control" id="test" placeholder="ID" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name Tournament</label>
                            <input type="text" class="form-control" id="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Desc</label>
                            <input type="text" class="form-control" id="desc" placeholder="desc">
                        </div>
                        <button onclick="addT();" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <span id="status"></span>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal create tournament-->
    <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">New Tournament</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="?op=admin&con=addTournament" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name Tournament</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Desc</label>
                            <input type="text" class="form-control" id="desc" name="desc" placeholder="desc" required>
                        </div>

                        <div class="form-group">
                            <input type="file" name="my_image" class="btn btn-primary" required>



                        </div>
                        <input type="submit" name="submit" value="Upload" class="btn btn-default">
                    </form>
                </div>
                <span id="status"></span>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal for charts-->
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">User settings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <canvas id="myChart" width="400" height="400"></canvas>
                    <script>
                        const ctx = document.getElementById('myChart').getContext('2d');
                        const myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Total visitors', 'Page visitors'],
                                datasets: [{
                                    label: '# of visitors',
                                    data: [<?= $visits ?>, <?= $pagevisits ?>],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- content manager page 1 -->
    <div class="modal fade" id="manager1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Add admin</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script>
                        tinymce.init({
                            selector: '#textarea'
                        });
                        tinymce.init({
                            selector: '#textarea1'
                        });
                    </script>
                    <form>
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="number" class="form-control" id="test" placeholder="ID" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Left side content</label>
                            <textarea class="form-control" id="textarea" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Right side content</label>
                            <textarea class="form-control" id="textarea1" rows="3"></textarea>
                        </div>
                        <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <input type="text" class="form-control" id="message" placeholder="desc">
                </div> -->
                        <button onclick="editConfirm();" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <span id="status"></span>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- content manager page 2 -->
    <div class="modal fade" id="manager2" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Add admin</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script>
                        tinymce.init({
                            selector: '#textarea2'
                        });
                        tinymce.init({
                            selector: '#textarea3'
                        });
                    </script>
                    <form>
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="number" class="form-control" id="test" placeholder="ID" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Left side content</label>
                            <textarea class="form-control" id="textarea2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Right side content</label>
                            <textarea class="form-control" id="textarea3" rows="3"></textarea>
                        </div>
                        <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Message</label>
                  <input type="text" class="form-control" id="message" placeholder="desc">
              </div> -->
                        <button onclick="editConfirm();" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <span id="status"></span>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- content manager page 3 -->
    <div class="modal fade" id="manager3" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Add admin</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input onkeyup="checkpass()" type="text" class="form-control" id="password" placeholder="Password">
                            <label id="output"></label>
                        </div>
                        <button onclick="addAdmin();" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <span id="status"></span>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./view/js/jquery-3.3.1.slim.min.js"></script>
    <script src="./view/js/popper.min.js"></script>
    <script src="./view/js/bootstrap.min.js"></script>
    <script src="./view/js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        function checkpass() {

            let userinput = document.querySelector('#password').value;
            if (userinput.length < 6) {
                document.querySelector('#output').innerHTML = "Password is too weak <i class=\"fa-solid fa-circle-xmark\"></i>";
            } else {
                document.querySelector('#output').innerHTML = "";
            }
        }
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });





        function deleteAP(x) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "?op=admin&con=delete",
                data: {
                    x: x
                },
                success: function(html) {
                    alert("Appointment has been deleted");
                    window.setTimeout(function() {
                        location.reload()
                    }, 2000)

                }
            })
        }

        function edit(y) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "?op=admin&con=edit",
                data: {
                    y: y
                },
                success: function(html) {
                    html = JSON.parse(html);
                    //console.log(html);
                    document.querySelector('#test').value = html['id'];
                    document.querySelector('#name').value = html['name'];
                    document.querySelector('#web').value = html['website'];
                    document.querySelector('#message').value = html['message'];
                }
            })
        }

        function editConfirm() {
            event.preventDefault();
            let tid = document.querySelector('#test').value;
            let name = document.querySelector('#name').value;
            let web = document.querySelector('#web').value;
            let message = document.querySelector('#message').value;
            const data = [tid, name, web, message];
            $.ajax({
                type: "POST",
                url: "?op=admin&con=editConfirm",
                data: {
                    data: data
                },
                success: function(html) {
                    document.querySelector("#status1").innerHTML = "Updated Successfully!!";
                    window.setTimeout(function() {
                        location.reload()
                    }, 2000)
                }
            })

        }

        function addAdmin() {
            event.preventDefault();
            let name = document.querySelector('#username').value;
            let desc = document.querySelector('#password').value;
            const data = [name, desc];
            $.ajax({
                type: "POST",
                url: "?op=admin&con=addAdmin",
                data: {
                    data: data
                },
                success: function(html) {
                    document.querySelector("#status").innerHTML = "Added Successfully!!";
                    window.setTimeout(function() {
                        location.reload()
                    }, 2000)
                }
            })

        }
    </script>

</body>

</html>