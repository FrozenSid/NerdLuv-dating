<?php include("top.html"); ?>

<!-- ALEX Homework 4 (NerdLuv)-->

<!-- PHP Code that accepts the form input from signup.php and writes it to the singles.txt file -->
<!--The form submits its data as a POST-method to signup-submit.php-->
<?php
$userName = $_POST["name"];
$userData = $userName;
foreach ($_POST as $key => $value) {
	if ($key != "name"){
		$userData = $userData.",".$value;
	}
}

#code to create a new user account in singles.txt on a new  line
#each field is separated by a comma
file_put_contents("singles.txt", "\n".$userData, FILE_APPEND);
?>

<div>
<h1>Thank you!</h1>
<p>
Welcome to NerdLuv, <?= $userName ?>!<br /><br />
Now <a href="matches.php">log in to see your matches!</a>
</p>
 <!--After user clicks the link it redirects him to
    the matches.php page to see his/her matches-->
</div>

<?php include("bottom.html"); ?>