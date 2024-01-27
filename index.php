<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="/Eu/Practica/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main" style="height:530px;">        
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="process.php" method="post">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="username" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <input type="password" name="confirm_pswd" placeholder="Confirm Password" required="">
                <button type="submit" name="signup">Sign up</button>
            </form>
        </div>

        <div class="login">
            <form action="process.php" method="post">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="login_email" placeholder="Email" required="">
                <input type="password" name="login_pswd" placeholder="Password" required="">
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
