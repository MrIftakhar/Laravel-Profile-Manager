<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary d-flex justify-content-center align-items-center min-vh-100">

    <div class="p-5 rounded shadow w-100" style="max-width: 720px; background-color: #a87bb5;">
        <h2 class="text-success text-center fw-semibold mb-4">Edit File</h2>

        <form method="POST" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Name</label>
                <input name="name" value="{{ $task->name }}" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input name="email" type="email" value="{{ $task->email }}" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Phone</label>
                <input name="phone" value="{{ $task->phone }}" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Address</label>
                <input name="address" value="{{ $task->address }}" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Bio</label>
                <textarea name="bio" required class="form-control" rows="3">{{ $task->bio }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Hobbies</label>
                <input name="hobbies" value="{{ $task->hobbies }}" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Date of Birth</label>
                <input type="date" name="date_of_birth" value="{{ $task->date_of_birth }}" required class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Upload Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            @if($task->image_path)
                <div class="mb-3 text-center">
                    <p class="fw-semibold mb-2">Current Image:</p>
                    <img src="{{ asset('storage/' . $task->image_path) }}" width="100" class="rounded img-thumbnail">
                </div>
            @endif

            <button type="submit" class="btn btn-primary w-100">Update File</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
