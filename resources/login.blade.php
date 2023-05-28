<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="login_as">Login As:</label>
            <select name="login_as" id="login_as">
                <option value="mahasiswa">Mahasiswa</option>
                <option value="staff">Staff</option>
                <option value="dosen">Dosen</option>
            </select>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required autofocus>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
