<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/theme-dark.css">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
    <div class="inner-banner bg-shape3 bg-color3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="inner-title text-center">
                        <h3>Forgot Password</h3>
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li>></li>
                            <li>Forgot Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="register-area ptb-100">
        <div class="container">
            <div class="register-form">
                <h3>Forgot Password</h3>
                <div class="form-sing">
                <?php
                    // Check if there is any forgot password error message
                    if (isset($_GET['err'])) {
                        $err = $_GET['err'];
                        switch ($err) {
                            case 'email_not_found':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Error:</strong> Email not found, please enter a valid email!
                                </div>
                                <?php
                                break;
                            default:
                                break;
                        }
                    }

                    // Check if there is any success message
                    if (isset($_GET['reset']) && $_GET['reset'] == 'success') {
                        ?>
                        <div class="alert alert-success">
                            <strong>Success:</strong> Please check your mailbox!
                        </div>
                        <?php
                    }
                ?>
                <form action="/karim%20user/Controller/userC/forgotpassword.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="email">Adresse Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Enter the email you used for your account">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn1 btn-two">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <p>If you remember your password, <a href="login.php">login here</a></p>
            </div>
        </div>
    </div>
</body>

</html>