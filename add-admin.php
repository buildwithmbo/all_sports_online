
<?php
include('inc/header.php');
?>
    <!--Begin Form Section-->
                <section class="account-page">
    <div class="login-page">
      <div class="form">
        <form action="" method="POST" class="login-form">
            <input type="text" name="full_name" placeholder="enter your name" />
          <input type="text" name="email_address"placeholder="email address" />
          <input type="password" name="password"placeholder="password" />
          <input type="submit" name="submit" value="Submit" class="button"/>
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
 <?php 
//Proccess input data and save it to data base 
//Also check if the submit button is clicked or not 
if(isset($_POST['submit']))
{
 //button clicked
  //get data from form
  $full_name = $_POST['full_name'];
  $email_address = $_POST['email_address'];
  $password = md5($_POST['password']); //password encryption with md5

  //SQL Query to save input data into the database
  $sql = "INSERT INTO tbl_admin SET
  full_name='$full_name',
  email_address='$email_address',
  password='$password' 
  ";

// Execute query and save data in database
$res = mysqli_query($conn, $sql) or die(mysqli_error()); 
//check whether the data (query) is inserted or not and display appropriate message
if($res==TRUE)
{
  //data inserted
  //create a session variable to Display Message
  $_SESSION['add'] = "SUCCESS! Please Check Your Email";
 //redirect page to home
 header("location:".SITEURL.'index.php');
}
else 
{
  //data not inserted
  //create a session variable to Display Message
  $_SESSION['add'] = "ERRO! Please Check Your Details";
 //redirect page to add admin
 header("location:".SITEURL.'add-admin.php');
}

}
?>


