<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

        <button type="submit">Register</button>
    </form>
</body>
</html>