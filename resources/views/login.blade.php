
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <div class="wrapper">    
        <form id="loginForm" method = "POST">
            <h1>Login</h1>
            
            <div class="input-box">
                @csrf
                <input type="text" placeholder="Username" name = "email" required>
            </div>
            <div class="input-box">
                @csrf 
                <input type="password" placeholder="Password" name = "password" required> 
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#"> Forgot password?</a>
            </div>
            <button type="submit" class="btn" name = "submit">Login</button>
            
        </form>
    </div>
</body>

</html> 