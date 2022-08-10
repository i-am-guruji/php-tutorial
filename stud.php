<!DOCTYPE html>
<html>
<head>
	
	<title>Ragistration Form</title>
</head>
<body bgcolor="pink">

<center>
	<marquee> <h1>Student Ragistration Form</h1> </marquee>
<form name="ragistartion" method="POST" action="valid.php">
	<table>
		
		<tr>
			<td>FirstName:- </td>
			<td> <input type="text" name="txtFName" maxlength="30" required> (max 30 character [a-z][A-Z])</td>
		</tr>
		<tr>
			<td>LastName:- </td>
			<td> <input type="text" name="txtLName" maxlength="30" required> (max 30 character [a-z][A-Z])</td>
		</tr>
		<tr>
			<td>Date of Birth:- </td>
			<td><input type="Date" name="Date" required></td>
		</tr>
		<tr>
			<td>Email:- </td>
			<td><input type="text" name="Email" required></td>
		</tr>
		<tr>
		<td>Mobile No:- </td>
		<td><input type="number" name="mobileNo" required> (10 digit)</td>
		</tr>
		<tr>
			<td>Gender:- </td>
			<td><input type="radio" name="Gender" value="Male">Male
				<input type="radio" name="Gender" value="Female">Female</td>
		</tr>
		<tr>
			<td>Address:- </td>
			<td><textarea cols="30" rows="5" name="address" required> </textarea></td>
		</tr>

		<tr>
			<td>City:- </td>
			<td><input type="text" name="city" maxlength="30" required>(max 30 character)</td>
		</tr>

		<tr>
			<td>PINCODE:- </td>
			<td><input type="number" name="pincode" maxlength="6" required> (6-digit)</td>
		</tr>

		<tr>
			<td>STATE:- </td>
			<td><input type="text" name="state" maxlength="30" required> (max 30 character)</td>
		</tr>

		<tr>
			<td>Country:- </td>
			<td><select name="selCountry">
				<option value="">----Select Country----</option>
				<option value="INDIA">INDIA</option>
				<option value="USA">USA</option>
				<option value="RUSSIA">RUSSIA</option>
				
			</select></td>
		</tr>

		<tr>
			<td>Select Hobbies:- </td>
			<td>
				<input type="checkbox" name="playing" value="Playing"> Playing
				<input type="checkbox" name="traveling" value="Traveling"> Traveling
				<input type="checkbox" name="dancing" value="Dancing"> Dancing <br>

				<input type="checkbox" name="other" value="other"> other
				<input type="text" name="othertx">
			</td>
		</tr>
		<tr>
			<td> Qualification : </td>
			<td>
			<table>
				<tr>
					<td align="center">Sl No.   </td>
					<td align="center">Examination   </td>
					<td align="center">Board   </td>
					<td align="center">Percentage   </td>
					<td align="center">Year Of Passing   </td>
				</tr>
				<tr>
					<td>1</td>
					<td>Class X</td>
					<td><input type="text" name="ClassX_Board"></td>
					<td><input type="text" name="ClassX_Percentage"></td>
					<td><input type="text" name="ClassX_Year"></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Class XII</td>
					<td><input type="text" name="ClassXII_Board"></td>
					<td><input type="text" name="ClassXII_Percentage"></td>
					<td><input type="text" name="ClassXII_Year"></td>
				</tr>
				<tr>
					<td>3</td>
					<td>Graduation</td>
					<td><input type="text" name="Graduation_Board"></td>
					<td><input type="text" name="Graduation_Percentage"></td>
					<td><input type="text" name="Graduation_Year"></td>
				</tr>
				<tr>
					<td>4</td>
					<td>Masters</td>
					<td><input type="text" name="Masters_Board"></td>
					<td><input type="text" name="Masters_Percentage"></td>
					<td><input type="text" name="Masters_Year"></td>
				</tr>
			</table>
			</td>
		</tr>

		<tr>
			<td>Coures<br>Applied For:-</td>
			<td><input type="radio" name="coures" value="BCA">BCA
				<input type="radio" name="coures" value="BCOM">BCOM
				<input type="radio" name="coures" value="BA">BA
				<input type="radio" name="coures" value="BSC">BSC
			</td>

		</tr>

		<tr>
			<td><input type="submit" name="submit" value="submit">
				<input type="reset" name="reset" value="reset">

			</td>
		</tr>
			

	</table>
	

</form>
</center>
</body>
</html>