<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/299a223406.js" crossorigin="anonymous"></script>
    <title>Login</title>

    <meta charset="uft-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <!-- sign in side -->
        <div class="side-signin">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us<br> please login with your personal info</p>
            <a href="signin.php"><button type="button">Sign In</button></a>
        </div>
        <!-- sign up side -->
        <div class="side-signup">
            <h1>create account</h1>
            <div class="icons">
                <span>
                    <i class="fa-brands fa-facebook-f"></i>
                </span>
                <span>
                    <i class="fa-brands fa-google-plus-g"></i>
                </span>
                <span>
                    <i class="fa-brands fa-linkedin-in"></i>
                </span>
            </div>
            <p>or use your email for registration:</p>
            <?php if(isset($_SESSION['existed'])):
            ?>
            <p>
                user alredy exist
            </p>
            <?php
            endif;
            unset($_SESSION['existed']);
            ?>
            <form action="register.php" method="POST">
        
                <!-- name -->
                <span>
                    <i class="fa-regular fa-user"></i>
                </span>
                <input type="text" name="user" id="user" placeholder="UserName"><br>
                <!-- email -->
                <span>
                    <i class="fa-regular fa-envelope"></i>
                </span>
                <input type="email" name="email" id="email" placeholder="Email"><br>
                <!-- password -->
                <span>
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input type="password" name="password" id="password" placeholder="Password"><br>
                <!-- button -->
                <button type="submit" name="signin">Sign up</button>
            </form>
        </div>
    </main>
</body>

</html>