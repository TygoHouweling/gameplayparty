<?php
include('./view/admin/admin_header.php')
?>

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
    function test(x) {
        $.ajax({
            type: "POST",
            url: "?op=admin&con=getData",
            data: {
                x: x
            },
            success: function(html) {
                let raw = JSON.parse(html);
                if (x == 1) {
                    tinyMCE.get('textarea').setContent(raw[0]['content_html']);
                    tinyMCE.get('textarea1').setContent(raw[1]['content_html']);
                }
                if (x == 2) {
                    tinyMCE.get('textarea2').setContent(raw[0]['content_html']);
                    tinyMCE.get('textarea3').setContent(raw[1]['content_html']);
                }
            }
        })

    }

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