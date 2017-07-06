<?php
//define variables and set to empty values
$firstnameErr = $emailErr = $lastnameErr = $websiteErr = "";
$firstname = $email = $lastname = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $lastname = test_input($_POST["lastname"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "First name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }


  if (empty($_POST["lastname"])) {
    $lastnameErr = "Last name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
	    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }
?>
<html>
<aside>
 <address>
    <ul>Please contact<br>
        <li><a href="http://www.majaweb.nakurze.sk/">www.majaweb.nakurze.sk</a></li>
        <li><a href="mailto:bersheb@gmail.com">bersheb@gmail.com</a></li>
        <li><a href="https://github.com/coderka">git</a></li>
    </ul>
</address>
</aside>

<div class="contact">
	<h2>Have a project? Contact us via form / give us a call today</h2><br>
	<p><span class="error">* required field.</span></p>

<form class="form-row" method="post" action="/*<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<fieldset>
    <legend>Personal information:</legend>
		First name:<br>
			<input type="text" name="firstname" size="50" placeholder="name" value="<?php echo $firstname;?>">
			<span class="error">* <?php echo $firstnameErr;?></span>
			<br>
		Last name:<br>
			<input type="text" name="lastname" size="50" placeholder="surname" value="<?php echo $lastname;?>">
			<span class="error">* <?php echo $lastnameErr;?></span>
			<br>
		E-mail:<br>
			<input type="text" name="email" size="50" placeholder="@" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br>
		Add your website:<br>
			<input type="url" name="website" size="50" 
			placeholder="https:// - please fill complete url format" value="<?php echo $website;?>">
			<span class="error"><?php echo $websiteErr;?></span>
			<br> 
		Comment/Message:<br>
			<input type="text" name="comment" size="50" value="<?php echo $comment;?>"><br><br>
			<textarea type="text" name="comment" rows="10" cols="30" value="<?php echo $comment;?>">
			</textarea> 
			<br>
			
<div class='form-row'>
  <input type="reset" name="reset" value="Reset">
  <input type="submit" name="submit" value="Submit">
</div>

    </fieldset>
</form>
</div>