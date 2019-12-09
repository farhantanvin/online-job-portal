<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Edit User</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
		{{csrf_field()}}
	<table border="1">
	@foreach($users as $s)
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" value="{{$s->username}}"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="text" name="password" value="{{$s->password}}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value="{{$s->type}}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="update"></td>
			<td></td>
		</tr>
	</table>
	@endforeach
</form>

</body>
</html>