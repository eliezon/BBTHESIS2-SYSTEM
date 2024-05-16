<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Student Portal</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/login-register.css">
</head>
<body>
    <div class="con">

    <!-- START OF REGISTER FORM -->
        <div class="register" id="register">
            <form action="" class="register-form" method="post">
                <a href="index.php">
                    <img src="assets/images/csplogo.png" id="logo1" alt="CSP Logo">
                </a>
                <h2>CSP REGISTRATION</h2>
                <input type="text" name="" id="" placeholder="First Name">
                <input type="text" name="" id="" placeholder="Last Name">
                <input type="text" name="" id="" placeholder="Middle Name">
                <input type="text" name="" id="" placeholder="student ID">
                <input type="text" name="" id="" placeholder="email">
                <input type="password" name="" id="" placeholder="password">
                <input type="text" name="" id="" placeholder="confirm password">
                <br>
                <button type="submit" >Submit</button>
            </form>
        </div>

        <div class="logo" id="logo">
        <img src="assets/images/scclogo.png" alt="">
            <h1>COLLEGE STUDENT <br> PORTAL</h1>
            <h2>Already Have An Account?</h2>
            <p>To access our College Student Portal, simply login to your account by clicking the Sign In button</p>
            <button onclick="showLogin()">Sign In</button>
        </div>
        <!-- END OF REGISTER FORM -->


        <!-- START OF LOGIN FORM -->
        <div class="login" id="login">
            <form action="" method="post">
              
                <a href="index.php">
                    <img src="assets/images/csplogo.png" id="logo1" alt="CSP Logo">
                </a>
                <h2>CSP LOGIN</h2>
                <div>
                <input type="text" name="" id="" placeholder="student ID">
                <input type="password" name="" id="" placeholder="password">
                <br>
                <input type="checkbox" style="accent-color: red">
                <div class="asd">
                    <p>Remember me</p>
                <a href="#">Forgot password?</a>
                </div>
                <button type="submit">Sign In</button>
                   

                <div class="link-icons" >
                <i class='bx bxl-twitter'></i>
                <i class='bx bxl-facebook-circle'></i>
                <i class='bx bxl-instagram'></i>
                <i class='bx bxl-linkedin'></i>
                </div>
                </div>
            </form>
        </div>

        <div class="logo1" id="logo2">
            <img src="assets/images/scclogo.png" alt="" id="scc">
            <h1>COLLEGE STUDENT <br> PORTAL</h1>
            <h2>Doesn't Have An Account?</h2>
            <p>To access our College Student Portal, simply Signup by clicking the Signup button</p>
            <button  onclick="showRegister()" id="loginbtn">Sign Up</button>

        </div>
         <!-- END OF LOGIN FORM -->

    </div>
   

    <script src="script/script.js"></script>
</body>
</html>
