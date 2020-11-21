<form method="post" action="{{route('game.login')}}">
    @csrf

    <div class="form_group">
        <label style="color: darkslateblue">Username</label>
        <label>
            <input type="text" name="name" class="form-control" style="background-color: aliceblue">
        </label>
        <label style="color: darkslateblue">Password</label>
        <label>
            <input type="password" name="password" class="form-control" style="background-color: aliceblue">
        </label>
        <button type="submit" style="background-color: darkslateblue;color: aliceblue">Login</button>
    </div>
</form>
