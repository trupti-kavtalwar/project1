
<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register -register page</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registration</h3></div>
                                    <div class="card-body">
                                    <form action="register_code.php" method="post">
                                <div class="mb-3">
                                    <label for="uname" class="form-label"> User Name</label>
                                    <input type="text" name="name" class="form-control" id="uname" aria-describedby="uname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" required>
                                    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                   <textarea name="address" id="address" cols="10" rows="3" class="form-control" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="Password" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="radio" name="gender" <?php if($gender == "male"){echo 'male'; }?> value="male" class="">
                                    <label class="form-check-label">Male</label>&nbsp; 
                                    <input type="radio" name="gender" <?php if($gender == "female"){echo 'female'; }?>  value="female" class="">
                                    <label class="form-check-label">Female</label>&nbsp; 
                                    <input type="radio" name="gender" <?php if($gender == "other"){echo 'other'; }?> value="other" class="">
                                    <label class="form-check-label">Other</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-info">Reset</button>
                            </form>
                        
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
