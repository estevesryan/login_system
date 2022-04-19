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
            <a href="index.php"><button type="button">Sign Up</button></a>
        </div>
        <!-- sign up side -->
        <div class="side-signup">
            <h1>Sign In</h1>
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
            <p>or use your email for Sign In:</p>
            <?php if (isset($_SESSION['not-authenticated'])):
            ?>
            <p>User or password not found</p>
            <?php
            endif;
            unset($_SESSION['not-authenticated']);
            ?>
            <form action="login.php" method="POST">
        
                <!-- name -->
                <span>
                    <i class="fa-regular fa-user"></i>
                </span>
                <input type="text" name="user" id="user" placeholder="UserName"><br>
                
                <!-- password -->
                <span>
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input type="password" name="password" id="password" placeholder="Password"><br>

                <!-- button -->
                <button type="submit" name="signin">Sign In</button>
            </form>
        </div>
    </main>
</body>

</html>