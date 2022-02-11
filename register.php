<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19BCE2278 IWP DA2 Register</title>
	<link rel="stylesheet" href="register.css">
</head>
<body>
<?php
//connection
$conn = new mysqli('localhost', 'root', '', 'assignment');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
	<script src="register.js"></script>
	<div class="register-box">
		<h1 style="text-align: center;">REGISTER</h1>
		<form name="RegisterForm" action="register_post.php" onsubmit="return formvalidation()" method="POST">  
			<table>
              	<tr>
					<td><p>First Name</p></td>
					<td><input type="text" name="FirstName" placeholder="Enter Your First Name" required></td>
                </tr>
                <tr>
                   	<td><p>Last Name</p></td>
					<td><input type="text" name="LastName" placeholder="Enter Your Last Name" required></td>
				</tr>
                <tr>
                   	<td><p>Date of Birth</p></td>
					<td><input type="date" name="DoB" placeholder="Select Date of Birth" max="2009-12-31" required></td>
				</tr>
				<tr>
                	<td><p>Gender</p></td>
					<td style="padding: 10px 0px 5px 0px;">
						<label><input type="radio" name="gender" value="male">Male</label>
						<label><input type="radio" name="gender" value="female">Female</label>
						<label><input type="radio" name="gender" value="others">Others</label>
					</td>
				</tr>
				<tr>
					<td><p style="padding: 13px 13px;">Place of Birth</p></td>
					<td><select name="state" Style="font-size : 12pt;" required>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Delhi">Delhi</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value="Puducherry">Puducherry</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="West Bengal">West Bengal</option>
					</select></td>
				</tr>
				<tr>
					<td><p>Phone</p></td>
					<td><input type="tel" name="phone" placeholder="Enter phone number" pattern="[0-9]{10}" required></td>
				</tr>
				<tr>
					<td><p>Photo</p></td>
					<td><input type="file" name="photo" accept="image/*"></td>
				</tr>
				<tr>
					<td><p>Webpage</p></td>
					<td><input type="url" name="webpage" placeholder="Enter URL (if any)"></td>
				</tr>
				<tr>
					<td><p>Email ID</p></td>
					<td><input type="email" name="email" placeholder="Enter Email address" required></td>
				</tr>
				<tr>
					<td><p>Password</p></td> 
					<td><input type="password" name="password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td><p>Retype</p></td> 
					<td><input type="password" name="password2" placeholder="Retype Password" required></td>
				</tr>
			</table>
			<input type="checkbox" id="terms" name="terms" value="accept">
  			<label><a href="" style="padding: 10px; font-size: 24px;">Send weekly Newsletters.</a></label>
            <input type="submit" name="Register-field submit" value="Register">
			<input type="reset" name="Register-field reset" value="Reset">
		</form> 	
	</div>
</body>
<html>