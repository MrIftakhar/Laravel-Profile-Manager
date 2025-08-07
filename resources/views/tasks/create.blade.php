<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary d-flex justify-content-center align-items-center min-vh-100">

    <form method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data"
        class="bg-white p-5 rounded shadow w-100" style="max-width: 720px;">
        
        <h2 class="text-center text-primary fw-bold mb-4">Create New File</h2>

        @csrf

        <div class="mb-3">
            <input name="name" placeholder="Name" required class="form-control" />
        </div>

        <div class="mb-3">
            <input name="email" type="email" placeholder="Email" required class="form-control" />
        </div>

        <div class="mb-3">
            <input name="phone" placeholder="Phone" required class="form-control" />
        </div>

        <div class="mb-3">
            <textarea name="address" placeholder="Address" required class="form-control" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <textarea name="bio" placeholder="Bio" required class="form-control" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <textarea name="hobbies" placeholder="Hobbies" required class="form-control" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <input type="date" name="date_of_birth" placeholder="Date Of Birth" required class="form-control" />
        </div>

        <div class="mb-4">
            <input type="file" name="image" class="form-control" />
        </div>

        <button type="submit" class="btn btn-primary w-100">Create File</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
