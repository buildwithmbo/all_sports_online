<?php
include('inc/header.php');
?>
    <!--Begin Form Section-->
                <section class="account-page">
    <div class="login-page">
      <div class="form">
        <form class="login-form">
            <input type="text" name="full_name" placeholder="fullname" />
          <input type="text" name="email_address" placeholder="email address" />
          <input type="password" name="password" placeholder="password" />
          <input type="submit" name="submit" value="submit" class="button"/>
          <p class="message">
            Already registered? <a href="login.php">Login</a>
          </p>
        </form>
      </div>
    </div>
</section><!--End Form Section-->
<?php
include('inc/footer.php');
?>
