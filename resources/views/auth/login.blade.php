<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary d-flex justify-content-center align-items-center min-vh-100">

    <form method="POST" action="{{ route('login') }}" class="bg-light p-5 rounded shadow w-100" style="max-width: 400px;">
        <h1 class="text-center text-danger mb-4 display-6">Log In</h1>
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" placeholder="Name" required class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="email" type="email" placeholder="Email" required class="form-control">
        </div>

        <div class="mb-4">
            <label class="form-label">Password</label>
            <input name="password" type="password" placeholder="Password" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Login
        </button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
