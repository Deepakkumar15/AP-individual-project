<?php

if(isset($_POST['submit']))
{
  $usrnm=$_POST['username'];
  $pss=$_POST['password'];
	if((strlen($usrnm)<=5) or (strlen($pss)<=8) )
  {
    echo "Username must be 5 characters long and Password must be 8 characters long";
  }
}

?>

<html >
  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="AP.css">
    <script  src="javascript.js"> </script>
  </head>
  <body>
    <div class="ab">
<h1>Create Your Account</h1></div>
<img src="Capture.jpg" width="100%" height="100px">
<br>
<br>
<br>
<div id="error_message"></div>
      <div>
        <div class="dv">
<form method="post" action=""  id="MY_FORM" onsubmit="return validate()">
  <table width="100%">
    <th><label>First Name</label>
    <input type="text" placeholder="Enter your Firstname here"  id="Firstname"></th>
    <th><label for="">Last Name</label>
    <input type="text" placeholder="Enter your Lastname here"  id="Lastname"></th>
  </table>
  <br>
  <table width="100%">
    <th><label>Username</label>
    <input type="text" placeholder="Enter your Usermane here"  name="username"></th>
    <th><label for="">Password</label>
    <input type="password" placeholder="Enter your Password here"  name="password"></th>
  </table>
  <div>
    <label class="abc"><b>E-mail:</b></label>
<br>
<input type="email" placeholder="Enter your email here" id="mail">
<br>
<br>
<br>
<br>
<label class="abc">Gender:</label>
<input type="radio" name="Gender" value="male" id="MALE">Male
<input type="radio" name="Gender" value="female" id="FEMALE">Female
<input type="radio" name="Gender" value="others"  id="OTHERS">Others
<br>
<br>
<br>
<br>
<label class="abc">Mobile No:</label><br>
<table width="100%">
  <th>
  <select id="country_code" name="codes">
    <option value="select_code">Select your country code</option>
    <option>+91</option>
      <option>+310</option>
        <option>+55</option>
          <option>+1</option>
          <option>+355</option>
  </select></th>
  <th>
  <input type="text" placeholder="Enter your Mobile number "  id="phone"></th>
</table>
  </div>
  <hr>
  <table width="100%">
    <th><input type="submit"  value="REGISTER" name="submit"></th>
    <th><input type="reset"  value="CLEAR"></th>
  </table>
</form>
</div>
</div>
</body>
</html>
