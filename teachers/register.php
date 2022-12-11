<?php 
session_start(); 
include "db_conn.php";
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>
<fieldset>
<legend>Contact Form</legend>
<form name="frmContact" method="post" action="contact.php">
<p>
<label for="Name">User name </label>
<input type="text" name="txtName" id="uname">
</p>
<p>
<label for="email">Password</label>
<input type="text" name="txtEmail" id="password">
</p>
<p>
<label for="Name">Name</label>
<input type="text" name="txtPhone" id="name">
</p>
<p>
<label for="message">Status</label>
<textarea name="txtMessage" id="status"></textarea>
</p>
<p>
<label for="phone">Phone</label>
<input type="text" name="txtPhone" id="phone">
</p>
<p>
<label for="image">image</label>
<input type="file" name="txtPhone" id="image">
</p>
<p>
<label for="email">Email</label>
<input type="email" name="txtPhone" id="email">
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</body>
</html>