<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bettlehyme Admin</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body style="padding:0px; margin:0px; height: 100vh; widht:100%; display:flex; align-items: center;
justify-content: center;">

    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="card" style="width:350px">
                    <div class="card-header">
                        <div class="card-title" style="padding-top: 10%; ">
                            <center><img src="img/logo-blue.png" alt="logo" width="180">
                            </center>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="/adminlogin/login" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" class="form-control" placeholder="Email"
                                                        id="first-name-icon" name="email">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" placeholder="Password"
                                                        id="password-id-icon" name="password">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex-justify-content-center">
                                                <center><button type="submit" class="btn btn-primary me-1 mb-1"
                                                        style="width: 100%;   border-radius: 5px 5px 5px 5px; ">
                                                        <span class="bi bi-chevron-double-right"> </span>
                                                    </button></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted">
        </div>
    </footer>
    </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
