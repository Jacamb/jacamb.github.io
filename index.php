<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <h1>Logowanie</h1>
    <form method="post" action="index.php">
        <input type="text" name="username" >
        <input type="text" name="password" >
        <input type="submit" name="submit" value="Login" >

    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $un=$_POST['username'];
    $pw=$_POST['password'];
    if ($un=='user' && $pw=='pass') {
        header("location:index.html");
        exit();
    } else {
        echo "Invalid Username/ Password";
    }
}
?> -->

<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LcPt78bAAAAADwYjjgeiN3zUFP1qvZjzl-aSUPv"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>