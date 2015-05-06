<?php
require("header.php");
ini_set('display_errors', 1);
error_reporting(E_ALL &~E_NOTICE);
require_once("connectvars.php");

$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password';";
	
	$result = mysqli_query($dbc, $sql);
	$numrows = mysqli_num_rows($result);
		
	if($numrows == 1) {	
		$row = mysqli_fetch_assoc($result);

        session_start();
        //$_SESSION['USERNAME'] = $row['first_name'];
        $_SESSION['USERID'] = $row['first_name'];
        echo "the session variables have been set!";
        header("Location: emotrack.php");
	}
	else {
		header("Location: login.php?error=1");
        ?>
        <div class="container">
        <div class="row">
        <div class="u-full-width">
        <div class="white">
    <?php
	}
}
else {
    ?>
    <div class="container">
    <div class="row">
    <div class="u-full-width">
    <div class="white">
    <?php

	echo "<h1>Login</h1>";
	
	if(isset($_GET['error'])) {
		echo "Incorrect login, please try again!";
	}

?>
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">

<table>
	<tr>
		<td>Email:</td>
		<td><input type="text" name="email" id="email" required/></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="password" id="password" required/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Log in"/></td>
	</tr>
</table>

</form>
Don't have an account? Go and <a href="register.php">Register</a>!
    </div>
      </div>
    </div>
  </div>
<?php
}

require("footer.php");
?>