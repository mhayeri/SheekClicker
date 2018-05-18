<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="index.css"> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <title>Login</title>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.menu h4').click(function() {
                    $("nav ul").toggleClass("active");
                })
            })
        </script>
    </head>
    <body>

        <!-- NAVBAR -->
        <div class="wrapper">
            <?php  
            include 'navloggedout.php';
            ?>
        </div>

        <div class="container-form" id="signin-form">
            <div class="wrapper animated slideInUp">
                <div class="header">Log In to Your Account</div>

                <div class="contact">
                    <form>
                        <p> 
                            <label for="email">Email</label>
                            <input type="email" name="email" required>
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input type="password" name="password" required>
                        </p>
                        <p class="full">
                            <button>Log In</button>
                            <a href="#">Forgot Password?</a>
                        </p>
                        <div class="privacy">
                            By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                        </div>
                    </form>
                </div>
                <div class="footer" id="signin-footer">Don't have an account?<a href="#" class="link"> Sign Up</a></div>
            </div>
        </div>


        <section class="footer">
            <?php  
            include 'footer.php';
            ?>

        </section>

        <!--
<div class="userbox">
<img src="Images/user.png" alt="user" class="user">
<form>
<div class="inputbox">
<input type="text" name="" placeholder="Username" required>
<span><i class="fa fa-user" aria-hidden="true"></i></span>
</div>
<div class="inputbox">
<input type="password" name="" placeholder="Password" required>
<span><i class="fa fa-lock" aria-hidden="true"></i></span>
</div>
<input type="submit" name="" value="Login">
</form>
<a href="#">Forgot Password?</a>
<a href="signup.php">Don't have an account? Sign up for free!</a>
</div>
</div>
-->

    </body>
</html>