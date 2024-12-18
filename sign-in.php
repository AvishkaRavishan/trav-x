<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header (Navigation) -->
    <header>
        <div class="navbar">
            <nav>
            <a href="index.php">Home</a>
        </nav>
        </div>
    </header>

    <!-- Banner Section -->
    <section class="banner">
        <h1>Welcome Back! Please Sign In</h1>
    </section>

    <!-- Sign In Form -->
    <section class="auth-form">
        <h1>Sign In</h1>
        <form action="#" method="post">
            <input type="email" placeholder="Your Email" required>
            <input type="password" placeholder="Your Password" required>
            <button type="submit">Sign In</button>
            <p>Don't have an account? <a href="sign-up.php">Sign Up</a></p>
            <p><a href="forgot-password.php">Forgot Password?</a></p>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2024 Tourism Website | All Rights Reserved.</p>
    </footer>


    
</body>
</html>
