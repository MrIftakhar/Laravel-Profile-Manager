<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding-top: 100px; background-color: #c95788; }
        a.button {
            display: inline-block;
            margin: 10px;
            padding: 15px 30px;
            background-color: #2779bd;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
        a.button:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>

    <h1>Welcome to Profile Manager</h1>
    <p>Please choose an option below:</p>

    <a href="{{ route('register') }}" class="button">Register</a>
    <a href="{{ route('login') }}" class="button">Login</a>

</body>
</html>
