<?php
include('inc/header.php');
?>
    <!--Begin Form Section-->
    <section class="account-page">
    <div class="login-page">
      <div class="form">
        <!--Begin Login Form Section-->
        <form class="login-form">
        <input type="text" name="email_address" placeholder="email address" />
          <input type="password" name="password" placeholder="password" />
          <input type="submit" name="submit" value="login" class="button"/>
          <p class="message">
            Not registered? <a href="signup.php">Create an account</a>
          </p>
        </form>
      </div>
    </div>
</section>
    <!--End Form Section-->
    <?php
include('inc/footer.php');
?>