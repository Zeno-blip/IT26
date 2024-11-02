

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form id="registrationForm" method = "post">
            <h1>Register</h1>
            @csrf
            <div class="input-box">
                <input type="text" placeholder="First Name" name = "firstname" >
            </div>
            <div class="input-box"> 
                <input type="text" placeholder="Last Name" name = "lastname" > 
            </div>
            <div class="input-box"> 
                <input type="text" placeholder="Gender" name = "gender" > 
            </div>
            <div class="input-box"> 
                <input type="email" placeholder="Email" name = "email"> 
            </div>
            <div class="input-box"> 
                <input type="password" placeholder="Password" name = "password" > 
            </div>
            
            
            <button type="submit" class="btn" name = "submit">Register</button>
            <div class="register-link">
                <p> Already have an account? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>
