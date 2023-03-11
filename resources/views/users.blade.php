<!-- <h1>User login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id ">
    <br><br>
    <input type="password" name="password" placeholder="enter user password ">
    <br><br>
    <button type="submit">login</button>
</form> -->
<h1>Welcome to the website </h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>
    @foreach($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['email']}}</td>
        <td><img src={{$user['avatar']}} alt=""/></td>
    </tr>
    @endforeach
</table>

