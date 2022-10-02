<?php
include "config.php";
$id = $_GET['viewid'];
$sql = "select * from tab_family where id ='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 py-5">
                    <div class="card">
                        <div class="card-title">
                            <h2 class="text-center">CRUD OPERATION</h2>
                        </div>
                        <div class="card-body"> 
                          
                                <div class="mb-3">
                                    <label for="uname" class="form-label"> User Name</label>
                                    <input type="text" name="name" class="form-control" id="uname" value="<?php echo $row['name'];?>" aria-describedby="uname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email'];?>" aria-describedby="email" required>
                                    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                   <textarea name="address" id="address" cols="10" rows="3"  class="form-control" required><?php echo $row['address'];?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $row['password'];?>" id="Password" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="radio"name="gender" value="male" class="form-check-input" id="radio">
                                    <label class="form-check-label" for="radio">Male</label>&nbsp; 
                                    <input type="radio" name="gender"  value="female" class="form-check-input" id="radio">
                                    <label class="form-check-label" for="radio">Female</label>&nbsp; 
                                    <input type="radio" name="gender"  value="ther" class="form-check-input" id="radio">
                                    <label class="form-check-label" for="radio">Other</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-info">Reset</button>
                           
                        
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
   
</body>
</html>