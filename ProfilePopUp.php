<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Facebox 1.2 Programmatic Tests</title>
	<h1> Edit Your Profile </h1>

	<FORM action ="ProfilePage.php" method="GET">
		First Name: 
		<br>  
		<INPUT type="text" name="firstName" value = "Matthew"/> 
		<br>
		Middle Name: 
		<br>
		<INPUT type="text" name="middleName" value = "Charles" />
		<br>
		Last Name: 
		<br>
		<INPUT type="text" name="lastName" value = "Milideo" />
		<br>
		Gender: 
		<br>
		<select class="form-control">
			<option value="Female">Female</option>
			<option value="Male" selected="selected" >Male</option>
			<option value="Other">Other</option>
		</select>
		
		Ethnicitiy: 
		<br>
		<select class="form-control">
			<option value="American Indian">American Indian</option>
			<option value="Asian">Asian</option>
			<option value="Black">Black</option>
			<option value="Hispanic">Hispanic</option>
			<option value="White" selected="selected" >White</option>
			<option value="Other">Other</option>
			<option value="Perfer Not To Say">Perfer Not To Say</option>
		</select>
		 
		Age: 
		<br>
		<input type="number" name="age" min="17" max="100" value ="21">
		<br>
		Year: 
		<br>
		<select class="form-control">
			<option value="Freshman">Freshman</option>
			<option value="Sophmore">Sophmore</option>
			<option value="Junior">Junior</option>
			<option value="Senior" selected="selected" >Senior</option>
			<option value="Super-Senior">Super-Senior</option>
			<option value="Not Student">Not Student</option>
		</select>
		<br>
		Email Address: 
		<br>
		<input type="email" name="email" value ="mmilideo@stevens.edu">
		<br>
		Phone Number: 
		<br>
		<input type="tel" name="phonenum" value ="856-XXX-XXXX">
		<br>
		Mailing Address: 
		<br>
		<input type="text" name="address" value ="123 Place Ave. Town NJ 00000">
		<br>
		Picture: 
		<br>
		<input type="file" name="pic" accept="image/*">

		<br>
		<br>
		<INPUT type="submit" name="submit" value="GO!"/>
	</FORM>



