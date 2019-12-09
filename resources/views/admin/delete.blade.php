<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Delete Page</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
	<tr>
			<td>ID</td>
			@foreach($users as $s)
			<td>{{$s->userId}}</td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td>{{$s->username}}</td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>{{$s->password}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$s->type}}</td> @endforeach
		</tr>
	</table>

<form method="post">
	{{csrf_field()}}
	<h3>Are you sure?</h3>
	<input type="submit" name="submit" value="Confirm">
</form>

</body>
</html>