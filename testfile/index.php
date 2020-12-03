<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../asset/style/style.css" />
    <title>Login and Logout</title>
</head>

<body>
    <section class="loginandlogout">
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="sign-in-form" method="POST">
                        <h2 class="title">Login</h2>
                        <div class="input-field">
                            <i class="fas fa-mobile-alt"></i>
                            <input type="number" required autocomplete="off" name="mobilenumber" placeholder="Mobile Number" />
                        </div>
                        <input type="submit" name="login" value="Login" class="btn solid" />
                    </form>
                    <form action="#" class="sign-up-form" method="POST">
                        <h2 class="title">Registration</h2>
                        <div class="input-field">
                            <i class="fas fa-user-tie"></i>
                            <input type="text" required autocomplete="off" name="firstname" placeholder="First Name" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user-astronaut"></i>
                            <input type="text" required autocomplete="off" name="lastname" placeholder="Last Name" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope-open-text"></i>
                            <input type="email" required autocomplete="off" name="emailaddress" placeholder="Email" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-mobile-alt"></i>
                            <input type="number" required autocomplete="off" name="mobilenumber" placeholder="Mobile Number" />
                        </div>
                        <input type="submit" name="registration" class="btn" value="Create Account" />
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Fo-Go Chat App</h3>
                        <p>Indian application</p>
                        <button class="btn transparent" id="sign-up-btn">Registration</button>
                    </div>
                    <img src="../asset/image/phone.svg" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <button class="btn transparent" id="sign-in-btn">Login
                        </button>
                    </div>
                    <img src="../asset/image/register.svg" class="image" alt="" />
                </div>
            </div>
        </div>
    </section>
    <script src="../asset/javascript/app.js"></script>
</body>

</html>
<?php

include("../php/connection.php");
include("../php/registration.php");
include("../php/login.php");

?>