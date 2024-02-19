<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

    @dump($errors)
    <form action="/register" method="POST">
        @csrf
        nombre
        <input type="text" name="name">
        numero telefonico
        <input type="number" name="phone_number">
        correo electronico
        <input type="email" name="email">
        contraseña
        <input type="password" name="password">
        vuelve a escribir tu contraseña
        <input type='password' name='password_confirmation'>
        <input type="submit" value="Register">
    </form>
</body>
</html>
