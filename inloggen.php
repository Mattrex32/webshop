<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inloggen.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
  <!-- logo -->
  <a href="inloggen.php"><img class="logoweb" src="imgs/logo2.png" alt=""></a>
  <!-- einde logo -->

<main>
    <form id="" class="formen" action="">
      <h1 class="login-h1">Login</h1>
        <!-- One "tab" for each step in the form: -->
        <article class="login">
          <!-- email -->
          <li class="li-login">
            Email: <input   class="input-login" placeholder="E-mail..."  name="email">
          </li>
          <!-- einde email -->
          <!-- password -->
          <li class="li-login">
            Password:<input id="show-my-password"  class="input-login" placeholder="Password..." name="pword" type="password">
             <li class="showpassword">
               <input class="showpasswordd" type="checkbox" onclick="mypassword()">Show Password
              </li>
          </li>
          <!-- einde password -->
        </article>
        <article class="onderknoppen">
        <button type="submit" class="button-login"> <a href="homepage.php" class="button-loginn"> submit </a></button>
        <li class="horizontal-line"></li>
        <button class="register-button">
          <a class="register-link" href="register.php">Click here to Register</a>
        </button>
      </article>
      </form>
    </main>
      <script >
        function mypassword() {
          let showpassword = document.getElementById("show-my-password");
            if (showpassword.type === "password") {
              showpassword.type = "text";
            } else {
              showpassowrd.type = "password";
        }
}
      </script>
     
</body>
</html>