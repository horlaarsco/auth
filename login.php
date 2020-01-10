<?php
require ('header.php');
require ('./connect/login.php')
?>

<main>
<!-- Default form register -->
<form class="text-center border border-light p-5 w-50 mx-auto mt-5" action="index.php" method="POST">

    <p class="h4 mb-4">Login</p>

      <input type="text" name="username" class="form-control mb-4" placeholder="Username">
      <span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>

    <!-- Password -->
    <input type="password" name="pwd" class="form-control mb-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>


    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="login">Sign in</button>

</form>
<!-- Default form register -->

</main>

<?php
require ('footer.php')
?>


