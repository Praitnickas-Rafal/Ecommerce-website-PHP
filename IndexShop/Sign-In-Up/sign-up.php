<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/IndexShop/css/styleUpOut.css" type="text/css">
  <title>Sign Up</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
            <form action="process-signup.php" method="POST">
                <?php include('errors.php'); ?>
                    <h2>Sign Up</h2>

                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="username" value="<?php echo $username; ?>" required>
                        <label>Username</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" value="<?php echo $email; ?>" required>
                        <label>Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password_sh" required>
                        <label>Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="bag-check-outline"></ion-icon>
                        <input type="password" name="confirm_password"required>
                        <label>Confirm Password</label>
                    </div>

                    <div class="forget">
                        <label><input type="checkbox" name="agree">I agree with this statement</label>
                    </div>
                    <button type="submit" name="reg_user" >Sign Up</button>
                    <div class="register">
                        <p>Do you have an account? <a href="sign-in.php">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>