
<!DOCTYPE html>
<html>

    <head>
        <title>Camagru: Sign in</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="login-box">
            <h2>Login</h2>

            <div>
                <form action="index.php" method="post">
            
                    <div class="textbox">
                        <input type="text" placeholder="Username" name="username" value=""/>
                    </div>

                    <div class="textbox">
                        <input type="password" placeholder="Password" name="password_1" value=""/>
                    </div>

                   <input class="btn" type="button" name="submit" value="Sign In">
                <p>Not registered?  <a href="register.php">Sign Up</a></p>
                </form>
            </div>
        

            <div class="footer"> <p>&copy wasahmed 2019</p></div>
        </div>
    </body>
</html>