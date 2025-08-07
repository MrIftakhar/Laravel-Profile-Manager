<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #a87bb5;" class="min-vh-100 p-4">

    <!-- Container -->
    <div class="container bg-dark text-white p-5 rounded shadow-lg">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary">Welcome {{ auth()->user()->name }}</h2>
        </div>

        <!-- Buttons: Create & Logout -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('tasks.create') }}" class="btn btn-success shadow">Create File</a>
            <a href="{{ route('logout') }}" class="btn btn-danger shadow">Logout</a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success text-center fw-semibold">
                {{ session('success') }}
            </div>
        @endif

        <!-- Task Cards -->
        @foreach($tasks as $task)
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $task->name }}</p>
                    <p><strong>Email:</strong> {{ $task->email }}</p>
                    <p><strong>Phone:</strong> {{ $task->phone }}</p>
                    <p><strong>Address:</strong> {{ $task->address }}</p>
                    <p><strong>Bio:</strong> {{ $task->bio }}</p>
                    <p><strong>Hobbies:</strong> {{ $task->hobbies }}</p>
                    <p><strong>Date of Birth:</strong> {{ $task->date_of_birth }}</p>

                    @if($task->image_path)
                        <img src="{{ asset('storage/' . $task->image_path) }}" alt="Image" class="img-thumbnail mt-3" style="max-width: 150px;">
                    @endif

                    <div class="mt-4 d-flex gap-3">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Delete this task?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
