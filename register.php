<?php
    require("header.php");
	ini_set('display_errors', 1);
	error_reporting(E_ALL &~E_NOTICE);
	
	require("connectvars.php");
	try {
        $dbc = new PDO('mysql:host=127.0.0.1;dbname=[DATABASE NAME HERE]',DB_USER,DB_PASSWORD);
    }
    catch (Exception $e) {
        echo "Error: ".$e->getMessage();
    }
	
	if ($_POST['submit']) {
        //if ($_POST['firstname'] == "" || $_POST['lastname'] == "" || $_POST['password'] == "" || $_POST['email'] == "")  {
        //    header("Location: register.php?error=empty");
        //}
		if ($_POST['password1'] == $_POST['password2']) {
            $firstname = $_POST['firstname'];
            //$firstname = $dbc->real_escape_string($firstname);
            $lastname = $_POST['lastname'];
            //$lastname = mysqli::real_escape_string($lastname);
            $password = $_POST['password1'];
            //$password = mysqli::real_escape_string($password);
            $email = $_POST['email'];
            //$email = mysqli::real_escape_string($email);

            try {
                $query = "INSERT INTO users (first_name, last_name, password, email) VALUES ('$firstname', '$lastname', '$password', '$email');";
                $stmt = $dbc->prepare($query);
                $stmt->execute();
                $dbc = null;
            }
            catch(Exception $e) {
                echo "Error: ".$e->getMessage();
            }
            session_start();
            $_SESSION['USERID'] = $firstname;
            ?>
            <div class="container">
                <div class="row">
                  <div class="u-full-width">
                    <div class="white">
                        <p>Thanks for registering!</p>
                        <p><a href="survey.php">Click here</a> to take the survey and start tracking your emotions!</p>
            <?php
		}
		else {// passwords did not match
			header("Location: register.php?error=pass");
		}
	}
	else {
		// $_POST['submit'] was false, therefore check to see if we came here from a redirect


        ?>
        <div class="container">
            <div class="row">
                <div class="u-full-width">
                    <div class="white">
                        <?php

		switch($_GET['error']) {
			case "pass":
				echo "Passwords do not match.";
				break;
			case "taken":
				echo "Email already used, please log in, or use another.";
				break;
			case "no":
				echo "Incorrect login details!";
				break;
            case "empty":
                echo "Please enter your information.";
                break;
		}
?>
<h2>Register</h2>
To sign up for The Moment, please fill in the form below.
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
	<table>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstname"/></td>
		</tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastname"/></td>
        </tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password1"/></td>
		</tr>
		<tr>
			<td>Password (again)</td>
			<td><input type="password" name="password2"/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Sign up!"/></td>
		</tr>
	</table>
</form>
        </div>
        </div>
        </div>
        </div>
<?php
	}
require("footer.php");
?>




















