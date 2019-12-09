<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User List</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>Type</td>
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->userId}}</td>
			<td>{{$s->username}}</td>
			<td>{{$s->password}}</td>
			<td>{{$s->type}}</td>
			<td>
				<a href="{{route('admin.edit', $s->userId)}}">Edit</a> | 
				<a href="{{route('admin.delete', $s->userId)}}">Delete</a> | 
				<a href="{{route('admin.details', $s->userId)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>