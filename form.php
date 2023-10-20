<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "gmail";
$conn =new mysqli($mysql_hostname,$mysql_user,$mysql_password,$mysql_database);
 if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$number = $_POST['number'];
$mail = $_POST['mail'];
$dob = $_POST['dob'];
$gen = $_POST['gen'];
$ret=mysqli_query($conn,"insert into tabemail values('$fname','$lname','$uname','$pass1','$pass2','$number','$mail','$dob','$gen')");
if($ret)
{
echo (" Account Created Sucessfully ");
header("Location: created.html");
}
else
{
echo("Error : Mail-id Already exists");
}
}
?>
<html>

<title>E-mail</title>

<head></head>

<style>

body
{
width:100%;
background-image: url("space.jpg");
}
ul
{
 list-style-type: none;
 margin: 0;
 padding: 0;
 overflow: hidden;
 background-color:#333;
 width:100%;
 border-radius:5px;
}
li
{
 float: left;
}



.in{
    width: 300px;
    height: 30px;
    margin-top: 5px;
    margin-bottom: 5px;
    border: #333 5px;
    border-radius: 5px;
}

label{
    color: #C0C0C0;
    text-align: left;
    font-family: sans-serif; 

}

button{
    height: 30px;
    width: 150px;
    border-radius: 5px;
    background-color:  #00BFFF;
    margin-top: 20px;
}

form{
    background-color: #333;
    border-radius: 30px;
    padding: 20px;
    margin-left: 300px;
    margin-right: 300px;
    background-color: rgba(0, 0, 0, 0.5);
}

button:hover{
    background-color: #4169E1;
    color: white;
    transition: 0.8s;
}

input:hover{
    background-color: #EAEEE9;
}

</style>

<body bgcolor="#DCD0FF">

<center style="color: #B666D2;">

<form class="form-horizontal" role="form" method="post" >

<h1 style="color: #F52887;">Create Toogle account</h1>
<div>
<label>First Name</label></br>
<input type="text" placeholder="First Name" class="in" name="fname" required></br>
</div>

<div>
<label>Last Name</label></br>
<input type="text" placeholder="Last Name" class="in" name="lname" required></br>
</div>

<div>
<label>User Name</label></br>
<input type="text" placeholder="UserName" class="in" name="uname" required></br>
</div>

<div>
<label>Password</label></br>
<input type="password" placeholder="Password" class="in" name="pass1" required></br>
</div>

<div>
<label>confirm Password</label></br>
<input type="password" placeholder="Confirm Password" class="in" name="pass2" required></br>
</div>

<div>
<label>Ph Number</label></br>
<input type="text" placeholder="Phone Number" class="in" name="number" required></br>
</div>

<div>
<label>E-Mail Address</label></br>
<input type="text" placeholder="Mail Address" class="in" name="mail" required></br>
</div>

<div>
<label>Date Of Birth</label></br>
<input type="date" placeholder="Date Of Birth" class="in" name="dob" required></br>
</div>

<div>
<label>Gender</label></br>
    <select name="gen" id="gen" class="in">
        <option disabled selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
    </select>
</div>

<div>
    <button type="submit" name="submit">Register</button>
    <a href="form.php">
    <button>Back</button>
    </a>
</div>

</form>

</center>

</body>

</html>
