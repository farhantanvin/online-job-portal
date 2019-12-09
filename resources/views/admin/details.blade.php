<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User Details</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			@foreach($users as $s)
			<td>{{$s->userId}}</td>
		</tr>
		<tr>
			<td>Employee Name</td>
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
	
</body>
</html>