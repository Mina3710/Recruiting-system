<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- File CSS -->
    <link rel="stylesheet" href="">
    <!-- file CSS -->
    <link rel="stylesheet" href="">

    <title>SignUp</title>
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Beauty Dent Clinic</a>
    </header>
        

        <?php

             $model = new persons();
             $controller = new PersonsController($model);
             
            
 
            
            if (isset($_POST['register'])) {
                # code...
                $first=$_REQUEST['name'];
                $last=$_REQUEST['lname'];
                $email=$_REQUEST['email'];
                $pass=$_REQUEST['password'];
                $cpass=$_POST['confirmPassword'];
                $controller->insert();
                header("Location:changePassword.php");
            }
        
        ?>
<div class="container">
            <div class="row py-5 mt-4 align-items-center">
                <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                    <h1>Welcome to Beauty Dent Clinic</h1>
                    <p class="font-italic text-muted mb-0">Create Account</p>
                    </p>
                </div>
                <div class="col-md-7 col-lg-6 ml-auto">
                    <!-- Registeration Form -->
                    <form id="register-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="text-left w-100 mb-4 ml-3">
                            <p class="text-green h3 font-weight-bold text-uppercase">Create an Account</p>
                        </div>
                        <div class="container">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email address" required>
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group col-lg-12 mb-3">
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <input type="submit" name="register" class="btn btn-primary btn-block py-2 font-weight-bold" value="Create your account">
                        </div>
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>
                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" id="login" class="text-primary ml-2">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>