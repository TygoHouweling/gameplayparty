<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->



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