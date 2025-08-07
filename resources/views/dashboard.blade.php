<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-purple-400 p-6">

    <!-- Centered Welcome Message -->
    

    <!-- Task List -->
    <div class=" bg-gray-900 p-6 rounded shadow-md space-y-4">
        <div class="text-center mb-6">
        <h2 class="text-4xl font-bold text-blue-600">Welcome {{ auth()->user()->name }}</h2>
    </div>

    <!-- Create and Logout Buttons (Left & Right) -->
    <div class="max-w-6xl mx-auto flex justify-between items-center mb-6">
        <a href="{{ route('tasks.create') }}"
            class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded shadow-md">
            Create File
        </a>
        <a href="{{ route('logout') }}" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded shadow-md">
            Logout
        </a>
    </div>
        @if(session('success'))
            <p class="text-green-600 text-center font-semibold">{{ session('success') }}</p>
        @endif

        @foreach($tasks as $task)
<div class="border border-gray-300 rounded p-4 bg-gray-50 space-y-2">
    <p><strong>Name:</strong> {{ $task->name }}</p>
    <p><strong>Email:</strong> {{ $task->email }}</p>
    <p><strong>Phone:</strong> {{ $task->phone }}</p>
    <p><strong>Address:</strong> {{ $task->address }}</p>
    <p><strong>Bio:</strong> {{ $task->bio }}</p>
    <p><strong>Hobbies:</strong> {{ $task->hobbies }}</p>
    <p><strong>Date of Birth:</strong> {{ $task->date_of_birth }}</p>

    @if($task->image_path)
        <img src="{{ asset('storage/' . $task->image_path) }}" alt="Image"
            class="mt-2 w-32 h-auto rounded">
    @endif

    <div class="mt-4 flex space-x-4">
        <a href="{{ route('tasks.edit', $task->id) }}"
            class="bg-blue-500 px-2 py-1 rounded hover:bg-blue-600 text-white shadow-md">Edit</a>

        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
            onsubmit="return confirm('Delete this task?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="bg-red-500 px-2 py-1 rounded hover:bg-red-600 text-white shadow-md">Delete</button>
        </form>
    </div>
</div>
@endforeach
        
    </div>

</body>

</html>