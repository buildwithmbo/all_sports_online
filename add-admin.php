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
if(isset($POST['submit']))
{
  //buutton clicked
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
// execute query and save data in database
$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error()); //database connection 
$db_select = mysqli_select_db($conn, 'all_sports_online') or die(mysqli_error()); // select database  
//res = mysqli_query($conn, $sql) or die(mysqli_error());
}
?>
