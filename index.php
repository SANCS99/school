<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="shortcut icon" href="image/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  font-family: Arial;
  color: white;
}

h1{
    text-align: center;
}


.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
    z-index: -1;
  left: 0;
  background-color: #111;
}

.right {
    z-index: -1;
  right: 0;
  background-color: #3e2b2b;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}



/* CSS */
.button {
  background-color: #172876;
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: color 100ms;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button:hover,
.button:focus {
  background-color: #F082AC;
}

.logo{
    margin-left: 45%;
}
</style>
</head>
<body>
<h1>Clayton College</h1>
<img class = "logo" src="image/logo.jpg" alt="Logo" width="150" 
     height="150">
<div class="split left">

  <div class="centered">
    <img src="image/teacher.jpeg" alt="Avatar teacher">
    <h2>I am a Teacher</h2>
    <p></p>
    <a href="teachers/login.php" class="button">Login</a>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <img src="image/student.jpg" alt="Avatar student">
    <h2>I am a Student</h2>
    <p></p>
    <a href="students/login.php" class="button">Login</a>
  </div>
</div>
     
</body>
</html> 