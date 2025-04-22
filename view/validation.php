<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>User Registration</title>
</head>
<body>

<h2>Registration Form</h2>

<form id="myForm" onsubmit="return validateForm()">
  
  <label>Name:</label><br>
  <input type="text" id="name"><br>
  <span id="nameError" style="color:red"></span><br>

  <label>Email:</label><br>
  <input type="text" id="email"><br>
  <span id="emailError" style="color:red"></span><br>

  <label>Password:</label><br>
  <input type="password" id="password"><br>
  <span id="passwordError" style="color:red"></span><br>

  <label>Phone Number:</label><br>
  <input type="text" id="phone"><br>
  <span id="phoneError" style="color:red"></span><br>

  <label>Address:</label><br>
  <input type="text" id="address"><br>
  <span id="addressError" style="color:red"></span><br><br>

  <input type="submit" value="Submit">
</form>

<!-- এখানে আলাদা script.js ফাইল লিঙ্ক করা হয়েছে -->
<script src="../javascript/validation.js"></script>

</body>
</html>
