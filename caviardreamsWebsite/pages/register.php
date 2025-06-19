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
                    </div>
                </div>
            </section>
        </div>
        <div class="right">
            <div class="auth-info">
                
                <h2>Create new account</h2>
                <p>To start booking rooms, create enter yout details</p>
            </div>

            <form action="../controllers/registraion_controller.php" method="POST">
                <div>
                    <input class="form-input"type="text" placeholder="First Name" name="first_name" required>
                </div>
                <div>
                    <input class="form-input"type="text" placeholder="Last Name" name="last_name" required>
                </div>
                <div>
                    <input class="form-input" type="text" placeholder="Phone Number" name="phone_number" required>
                </div>
                <div>
                    <input class="form-input" type="email" placeholder="Email Address" name="email" required>
                </div>
                <div>
                    <input class="form-input" type="date" placeholder="Date of Birth" name="date_of_birth" required>
                </div>
                <div>
                    <select class="form-input" name="client_type" id="">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                   
                </div>
                <div>
                    <input class="form-input" type="password" placeholder="Password" name="password" required>
                </div>
                <div class="terms">
                    <input type="checkbox" placeholder="Password" required class="checkbox-input" name="terms" >
                    <p>Accept Terms & Conditions</p>
                </div>
                <button type="submit" class="btn">Login</button>
                <p style="text-align:center" class="">Already have an account? <span><a href="login.php">Login</a></span> </p>
            </form>
        </div>
    </div>
</body>
</html>

<script src="static/JS/login.js"></script>