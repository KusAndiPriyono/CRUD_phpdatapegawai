<?php
    if (isset($error)) : ?>
        <p style="color: red; font-style: italic">Username / Password Salah</p>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit-up">
    <title>Login Aplication</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="h-100 bg-info d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
                    <h3 class="text-center text-info pb-3 mb-3 border-bottom">Login Aplikasi</h3>
                    <form action="ceklogin.php" method="post">
                        <input type="text" class="form-control form-control-lg mb-3" placeholder="Username" name="username">
                        <input type="password" class="form-control form-control-lg mb-3" placeholder="Password" name="password">
                        <input type="submit" class="btn- btn-info btn-lg btn-block" value="Login">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>