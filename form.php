<?php

?>

<!DOCTYPE HTML>  
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
<style>
.error {
  color: #FF0000;
  font-family: 'Share Tech', sans-serif;
}
html{
  text-align: center;
    background-color: black;
    font-family: 'Share Tech', sans-serif;
}
form {
    text-align: center;
    background-color: black;

    padding: 0.5rem;
    color: whitesmoke;
    font-family: 'Share Tech', sans-serif;
}
form input, textarea {
  width:500px;
  border-style:solid;
  border:1px;
  border-top:0;
  border-left:0;
  border-right:0;
  border-color:white;
  color:white;
  background-color:transparent;
}
input, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.tyou{
  width:100%;
  vertical-align:middle;

}
.tyou h3{
  color:black;
  background-color:cyan;
}

.submitter:hover{
  background-color:cyan;
}
input[type=text], select, textarea {
    padding: 12px;
 
    border-radius: 4px;
    box-sizing: border-box;
    border-top:0;
  border-left:0;
  border-right:0;
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */;
}
input[type=submit] {
    background-color: #CCC009;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    -webkit-appearance: button;
    font-family: 'Share Tech', sans-serif;
}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
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
   /* 
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }*/

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  /*
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
    */
  
  $to = "tomowens.contact@gmail.com";
$subject = "Contact Form Message";
$txt = $email . "\n Message: " .  $comment;
$headers = "From: tomowens.contact@gmail.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?>
<div class="tyou">
<h3>Message sent, thank you.</h3>
</div>
<?
/**/
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  
  } 

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}




?>


<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input type="text" name="name" value="<?php echo $name;?>" placeholder="Your Name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <input type="text" name="email" value="<?php echo $email;?>" placeholder="Your Email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <textarea name="comment" rows="5" cols="40" placeholder="Send us a message"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit" class="submitter">  
</form>



</body>
</html>
<?php ?>