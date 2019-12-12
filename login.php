<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
<fieldset>
  <legend>LOGIN</legend>
  <form method="POST" action="a_login.php">
    <table>
      <tr><td>
        User Id <br>
        <input type="text" name="id">
      </td></tr>
      <tr><td>
        Password <br>
        <input type="password" name="pass">
      </td></tr>
      <tr><td>
        <input type="checkbox" name="remember"> Remember Me 
      </td></tr>
      <tr><td>
        <hr>
      </td></tr>
      <tr><td>
        <input type="submit" name="login" value="Login"> <a href="signup.php">Register</a>
      </td></tr>
    </table>
  </form>
</fieldset>
</body>
</html>