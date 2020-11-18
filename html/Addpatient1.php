<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>button {
   transition-duration: 0.4s;
 }
 input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
 td
 {font-size: 150%;}
 button:hover {
   background-color: #004e92;
   color: aqua; /* Green */
   
 }
 form{
    background-color: lightgray;
 }
 button
 {box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
   color: darkturquoise;
   font-size: 24px;
   padding: 14px 40px;}
   
.image1:hover{
  opacity:0.25;
}
.image2:hover{
  color: white;
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

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <div class="row">
    <center class="image1">  
    <div class="column">
        <img src="https://www.apollohospitals.com/images/coe/neurosciences.png" alt="Snow" style="width:20%" >
      </div>
      </center>
      <center class="image1"> 
      <div class="column">
        <img src="https://www.apollohospitals.com/images/coe/heart.png" alt="Forest" style="width:20%" >
      </div>
    </center> 
        <center class="image1"> 
      <div class="column">
        <img src="https://www.apollohospitals.com/images/coe/gastroenterology.png" alt="Mountains" style="width:20%">
      </div>
    </center> <center class="image1"> 
      <div class="column">
        <img src="https://www.apollohospitals.com/images/coe/preventive-medicine.png" alt="Mountains" style="width:20%">
      </div>
    </center> <center class="image1"> 
      <div class="column">
        <img src="https://www.apollohospitals.com/images/coe/orthopaedics.png" alt="Mountains" style="width:20%">
      </div>
    </center> <center class="image1"> 
      <div class="column">
        <img src="https://www.apollohospitals.com/images/coe/bariatric-surgery.png" alt="Mountains" style="width:20%">
      </div>
    </center> <center class="image1"> 
      <div class="column">
        <img src="https://www.apollohospitals.com/images/coe/cancer-care.png" alt="Mountains" style="width:20%">
      </div>
    </center> 
    </div>
    <div id="header">
        <center class="image2"><a href="Doctorsection.html"> <img src="../images/doctor.jpg" height="100" width="100" alt="doctorlogo" id="doctorlogo"><br><p style="color:black;"> Doctor's Section</p></a>
        </center>
        </div>
        <BR>
            <BR>    
        <div>
            <center>
      </div>
 <!-- <form action="../php/result.php" method="get">
  <table>
   <tr>
    <td>Patient Name :</td>
    <td><input type="text" name="name"></td>
   </tr>
    <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="Gender"> Male
     <input type="radio" name="Gender"> Female
    </td>
   </tr>
  <tr>
    <td>Address :</td>
    <td><textarea type="text" name="address" ></textarea></td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email"></td>
   </tr>
<tr>
    <td>Phone Number :</td>
    <td><input type="text" name="number"></td>
   </tr>
<tr>
    <td>Date Of Birth :</td>
   <td><input type="date" name="dob"  placeholder="Date"></td>
     </tr>
     <tr>
        <td>Blood Group : </td>>
      <td> <input list="browsers" name="browser" id="browser">
         <datalist id="browsers">
           <option value="A+">
           <option value="A-">
           <option value="B+">
           <option value="B-">
           <option value="O+">
           <option value="O-">
           <option value="AB+">
           <option value="AB-">
           </datalist></td>>
        </tr>
    <tr>
    <td>Emergency Contact Name:</td>
    <td><input type="text"></td>
   </tr>
<tr>
    <td>Relationship :</td>
    <td><input type="text"></td>
   </tr>
<tr>
    <td>Phone Number:</td>
    <td><input type="text"></td>
   </tr>
<tr>
    <td>Reason For Registration :</td>
    <td><input type="text"></td>
   </tr>
<tr>
    <td>Additional Information :</td>
    <td><textarea></textarea></td>
   </tr>
<tr>
    <td>Doctor Name :</td>
    <td><input type="text"></td>
   </tr>
<tr>
    <td>Taking Any Medications Currently :</td>
    <td>
     <input type="radio" name="yesno"> Yes
     <input type="radio" name="yesno"> No
    </td>
   </tr>
<tr>
    <td>If Yes, Please List It Here :</td>
    <td><textarea></textarea></td>
   </tr>
  </table>
  <br>
  <center><button  type="submit" value="submit"  autofocus >Add Patient</button></center>
 </form> -->



<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>