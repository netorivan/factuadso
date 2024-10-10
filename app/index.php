<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="jv.js"> esta cpnexion no se hace para script-->

    <title>login</title>
</head>

<body>




    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="register.php" method="post">
                <h1>Create Account</h1>
                <!-- crear una cuenta -->


                <span>Use your email for registration</span>
                <input type="text" placeholder="Username" name="new_user" id="new_user" required />
                <input type="email" placeholder="Email" name="new_mail" id="new_mail" required />
                <input type="password" placeholder="Password" name="new_pass" id="new_pass" required />
                <button type="submit" name="register">Sign Up</button>



            </form>
        </div>
        <!-- panel para ingresar a su cuenta, iniciar sesiòn  -->
        <div class="form-container sign-in-container">
            <form action="login.php" method="post">
                <h1>Sign in</h1>
                <!-- usar una cuneta creada -->
                <span> Use your account</span>
                <input type="text" placeholder="Name" name="username" id="username" required>
                <input type="email" placeholder="Email" name="email" id="email" />
                <input type="password" placeholder="Password" name="password" id="password" required />
                <a href="getacount.php">Forgot your password?</a>
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>


        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <!-- panel para crear una cuenta -->
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Welcome !</h1>
                    <p>if you are a new user please, you register!</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
            - Read how I created this and how you can join the challenge
            <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
        </p>
        <script src="jv.js"></script>
    </footer>
</body>

</html>