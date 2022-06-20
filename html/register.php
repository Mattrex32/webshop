<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/register.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Document</title>
</head>

<body>
  <a href="/html/inloggen.php"><img class="logoweb" src="/imgs/logo2.png" alt=""></a>
  <main class="mainregisteren">
    v
    <li class="horizontal-line-register"></li>

    <form id="" class="formen" action="">
      <h1 class="login-h1">Register</h1>
      <!-- One "tab" for each step in the form: -->
      <article class="login">
        <!-- name -->
        <li class="li-login">
          Name: <br> <input class="input-login" placeholder="Name..." name="email">
        </li>
        <!-- last-name -->
        <li class="li-login">
          Last Name:<br> <input class="input-login" placeholder="last name..." name="email">
        </li>
        <!-- email -->
        <li class="li-login">
          Email:<br> <input class="input-login" placeholder="E-mail..." name="email">
        </li>
        <!-- einde email -->
        <!-- password -->
        <li class="li-login">
          Password:<br><input id="show-my-password" class="input-login" placeholder="Password..." name="pword"
            type="password">
        <li class="showpassword">
          <input class="showpassword" type="checkbox" onclick="mypassword()">Show Password
        </li>
        </li>
        <!-- einde password -->
      </article>
      <button class="login-button-kanaal">
        <a class="register-link-a" href="/html/inloggen.php">Click here to Login</a>
      </button>
      <button type="submit" class="button-login">
        <a href="/html/inloggen.php" class="button-loginn"> submit</a>
      </button>
    </form>
  </main>

  <script>
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