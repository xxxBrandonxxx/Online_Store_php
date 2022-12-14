<?php

include('server.php');
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" , href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" , integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" , crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="src/styles.css">
    <title>Apex SkateShop</title>
</head>

<body id="wallpaperReg"> <?php include __DIR__ . "/bars/header.php"; ?>

    <<div class="vh-150 gradient-custom ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Register to Apex Skateshop</h2>
                                <p class="text-white-50 mb-5">Please enter your Details</p>
                                <form method="post" action="register.php">
                                    <?php include('errors.php'); ?>
                                    <div class="form-outline form-white mb-4">
                                        <label for="username" class="form-label">User Name*</label>
                                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" id="username" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label for="password" class="form-label">Password*</label>
                                        <input type="password" name="password_1" class="form-control" id="password" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label for="password" class="form-label">Confirm password*</label>
                                        <input type="password" name="password_2" class="form-control" id="password" required>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" name="reg_user" type="submit">Register</button>
                                    </div>
                                     </form>
                                 <div>
                                <p class="mb-0">Already have an account? <br> <a href="login.php" class="text-white-50 fw-bold">Sign in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <br> <br> <br>
        <?php include __DIR__ . "/bars/footer.php"; ?>
</body>

</html>