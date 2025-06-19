<?php

if(isset($_GET['sms'])){
    $sms = $_GET['sms'];
    echo "<script type='text/javascript'>$sms</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caviar Dreams</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="login-tabs">
        <div class="left">
            <section class="hero">
                <div class="container">
                    
                    <div class="hero-content" style="height:100vh">
                        <div class="brand">
                            <img class="logo" src="../static/images/logo.png" alt="">
                        </div>
                        <h1>Caviar Dreams  <br> Hotel</h1>
                        <!-- <p>Where Every Stay Feels Like Home Away From Home</p> -->
                    </div>
                </div>
            </section>
        </div>
        <div class="right">
            <div class="auth-info">
                <img class="logo" src="../static/images/logo.png" alt="">
                <h2>Login to your account</h2>
                <p>Welcome back! Please enter your details</p>
            </div>

            <form action="">
                <div>
                    <input class="form-input" type="email" placeholder="Email" required>
                </div>
                <div>
                    <input class="form-input" type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <p style="text-align:center" class="">Don't have an account? <span><a href="register.php">Register</a></span> </p>
            </form>
        </div>
    </div>
</body>
</html>

<script src="static/JS/login.js"></script>