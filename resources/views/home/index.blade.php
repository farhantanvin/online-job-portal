<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	
	<h1>Welcome to Job Portal! {{session('user'.'$username')}}</h1>
	<a href="{{route('admin.add')}}">Add Employee</a> | 
	<a href="{{route('admin.index')}}">Employee List</a> | 
	<a href="/logout">logout</a>
	<table>
	<tr>
			<!-- <td>ID</td> -->
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
	
</body>
</html>