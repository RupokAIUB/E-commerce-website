<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/Rupok.css">

   </head>
<body>

    <h2>User Registration</h2>
    <form action="submit.php" method="POST">
        <fieldset>
            <legend>Personal Information</legend>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
        </fieldset>
        
        <fieldset>
            <legend>Contact Details</legend>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="3" required></textarea><br><br>
        </fieldset>
        
        <fieldset>
            <legend>Additional Information</legend>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="Male" required> Male
            <input type="radio" id="female" name="gender" value="Female" required> Female<br><br>

            <label for="country">Country:</label>
            <select id="country" name="country" required>
                <option value="">Select</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Canada">Canada</option>
                <option value="India">India</option>
            </select><br><br>

            <label for="agree">Agree to Terms:</label>
            <input type="checkbox" id="agree" name="agree" required> I agree
        </fieldset>
        
        <br>
        <input type="submit" value="Register">
    </form>

</body>
</html>