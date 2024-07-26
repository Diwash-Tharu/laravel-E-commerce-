<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{asset('user/user.css')}}">
</head>
<body>
    <div class="all">
            <div class="img">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQp366E1uTL9ry1MAhpDQ2uAxj94E-xYYb4sRgi6vBpqU6gJsjCs38WvWQh3YGEl-0xZZo&usqp=CAU" alt="">
            </div>
            <div class="form">
            <!-- @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif -->

            <label class="page-title">Create a New Account</label>
            <form action="{{asset('')}}" method="POST">
                @csrf
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>

                <label for="password">Conform Password:</label>
                <input type="password" name="cpassword" id="password" required>

                <div class="checkbox-container">
                    <input type="checkbox" id="agree" class="checkbox-custom">
                    <label for="agree" class="checkbox-custom-label">I agree with the  terms of service and Privacy policy</label>
                </div>
                <button type="submit">Register</button>
            </form>

            
        </div>
    </div>
    
</body>
</html>