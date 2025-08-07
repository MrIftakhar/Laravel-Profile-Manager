<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center bg-gray-500">

    <div class="bg-blue-100 p-8 rounded shadow-md w-full  text-center">
        <h2 class="text-3xl text-green-400 font-semibold mb-6">Edit Task</h2>

        <form method="POST" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <input name="title" value="{{ $task->title }}" required
                class="w-full p-2 border border-gray-300 rounded"><br>

            <textarea name="description" required
                class="w-full p-2 border border-gray-300 rounded">{{ $task->description }}</textarea><br>

            <input type="file" name="image" class="w-full"><br>

            @if($task->image_path)
                <div>
                    <p class="mb-2">Current Image:</p>
                    <img src="{{ asset('storage/' . $task->image_path) }}" width="100" class="mx-auto">
                </div>
            @endif

            <button type="submit"
                class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 transition">Update Task</button>
        </form>
    </div>

</body>
</html>
