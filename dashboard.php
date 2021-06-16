<?php

    session_start();
    if(!isset('$_POST['username']')){
        echo "You have been logged out";
        header('login.php');

    }

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>Welcome, Dashboard!</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="font/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">

    <script>
        function resizeIframe(obj) {
            obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
        }
    </script>
</head>

<body>
    <div id="wrapper">
        <div id="content">
            <div class="container-fluid p-0 px-lg-0 px-md-0">
                <nav class="navbar navbar-expand navbar-light my-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <div class="col-md-12 mt-lg-4 mt-4">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h4 class="h3 mb-0 text-gray-800" href="dashboard.html">Admin Dashboard</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-12 mt-lg-4 mt-4">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <a href="logout.html"
                                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                            class="fas fa-door-open fa-sm text-white-50"></i>
                                        Log-Out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="container-fluid px-lg-4">
                    <div class="row">
                        <div class="col-md-12 mt-lg-4 mt-4">
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Add Students</h5>
                                            <a name="" href="add-dashboard.html"
                                                class="d-none d-sm-inline-block btn btn-lg btn-primary shadow-sm"><i
                                                    class="fas fa-user-plus fa-sm text-white-50"
                                                    target="add-student"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Remove Students</h5>
                                            <a href="del-dashboard.html"
                                                class="d-none d-sm-inline-block btn btn-lg btn-primary shadow-sm"><i
                                                    class="fas fa-user-minus fa-sm text-white-50"
                                                    target="del-student"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">View Students</h5>
                                            <a href="view-dashboard.html"
                                                class="d-none d-sm-inline-block btn btn-lg btn-primary shadow-sm"><i
                                                    class="fas fa-user-friends fa-sm text-white-50"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">Click an Activity</h4>
                                            <h5 class="card-subtitle">View will change automatically.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</body>

</html>