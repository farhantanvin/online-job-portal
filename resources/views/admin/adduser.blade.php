<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	<link rel="stylesheet" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
</head>

<body>
	<h1>Add Employee</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post"  enctype="multipart/form-data">
		{{csrf_field()}}
	<table border="1">
		<tr>
			<td>Employee Name</td>
			<td><input type="text" name="employeename"></td>
		</tr>

		<tr>
			<td>Company Name</td>
			<td><input type="text" name="compnayname"></td>
		</tr>
		<tr>
			<td>Contact no</td>
			<td><input type="text" name="contactno"></td>
		</tr>

		<tr>
			<td>user name</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Save"></td>
			<td></td>
		</tr>
	</table>
</form>


</body>
</html>