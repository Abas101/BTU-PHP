<form method="post" action="{{route("post.login")}}">
    @csrf
    <div >
        <label>Username</label>
        <input type="text" name="name">
        <label>Password</label>
        <input type="password" name="password">
        <button type="submit">Login</button>
    </div>
</form>
