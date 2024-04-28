<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include the CSS files from the Dobby template -->
    <!-- Include your CSS files -->
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
    <!-- Inner Banner Section -->
    <!-- Your inner banner HTML code -->
    <div class="inner-banner bg-shape3 bg-color3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="inner-title text-center">
                        <h3>Login</h3>
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li>></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Utilisateur Form Section -->
    <div class="register-area ptb-100">
        <div class="container">
            <div class="register-form">
                <h3>Login</h3>
                <div class="form-sing">
                <?php
                // Check if there is any login error message
                if (isset($_GET['login_err'])) {
                    $login_err = $_GET['login_err'];
                    switch ($login_err) {
                        case 'missing_fields':
                            ?>
                            <div class="alert alert-danger">
                                <strong>Error:</strong> Please fill in all fields!
                            </div>
                            <?php
                            break;
                        case 'not_exist':
                            ?>
                            <div class="alert alert-danger">
                                <strong>Error:</strong> User does not exist!
                            </div>
                            <?php
                            break;
                        case 'wrong_password':
                            ?>
                            <div class="alert alert-danger">
                                <strong>Error:</strong> Incorrect password!
                            </div>
                            <?php
                            break;
                        case 'unknown_role':
                            ?>
                            <div class="alert alert-danger">
                                <strong>Error:</strong> Unknown user role!
                            </div>
                            <?php
                            break;
                        default:
                            break;
                    }
                }
            ?>
                    <form action="../../Controller/userC/login.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="email">Adresse Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Adresse Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="password">Mot de Passe</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Mot de Passe">
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LdTb8kpAAAAAD_1_8OReQLEdQMWyPCHIZ29gU7k"></div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn1 btn-two">Login</button>
                            </div>
                        </div>
                    </form>
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                </div>
                <p>If you don't have an account yet, <a href="register.php">register here!</a></p>
                <p>If you forgot your password, <a href="forgotpassword.php">click here</a></p>
                </p>
            </div>
        </div>
    </div>


</body>

</html>