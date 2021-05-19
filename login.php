<?php
include('inc/header.php');
?>
    <!--Begin Form Section-->
    <section class="account-page">
    <div class="login-page">
      <div class="form">
        <!--Begin Login Form Section-->
        <form class="login-form">
          <input type="text" placeholder="username" />
          <input type="password" placeholder="password" />
          <button>login</button>
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