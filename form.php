<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>

</style>
</head>
<body>
        <div class="box">
                <h2>Sign in</h2>
                <p>Use your Google Account</p>
                <form action="dummy.php" method="post">
                  <div class="inputBox">
                    <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);"  value="">
                    <label>Username</label>
                  </div>
                  <div class="inputBox">
                        <input type="password" name="password" required onkeyup="this.setAttribute('value', this.value);" value="">
                        <label>Password</label>
                  </div>
                  <input type="submit" name="sign-in" value="Sign In">
                </form>
                <hr>
                <a style="font-size: 16px;font-weight: 400;text-align: center;color: blue;letter-spacing: .1px; margin: 100px;" href="reg.php"> Create Account </a>
              </div>
</body>
</html>
