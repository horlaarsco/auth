<?php
require ('header.php');
require ('./connect/signup.php')
?>

<main>
<!-- Default form register -->
<form class="text-center border border-light p-5 w-50 mx-auto mt-5" action="index.php" method="POST">

    <p class="h4 mb-4">Sign up</p>


      <input type="text" name="username" class="form-control mb-4" placeholder="Username">
      <span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>


    <!-- E-mail -->
    <input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
    <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>


    <!-- Password -->
    <input type="password" name="password" class="form-control mb-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>


    <!-- Password -->
    <input type="password" name="cpassword" class="form-control mb-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>



    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="signup">Sign in</button>

</form>
<!-- Default form register -->

</main>

<?php
require ('footer.php')
?>


