<form method="post" action="{{route("post.register")}}">
    @csrf
    <a href="user/login">Login</a>
    <div class="form-group">
        <label>username</label>
        <input type="text" name="name" class="form-control">
        <label>email</label>
        <input type="text" name="email" class="form-control">
        <label>password</label>
        <input type="password" name="password" class="form-control">
        <button type="submit">Register</button>
    </div>
</form>
