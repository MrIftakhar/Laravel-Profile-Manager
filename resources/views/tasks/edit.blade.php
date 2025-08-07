<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center bg-gray-500">

    <div class="bg-blue-100 p-8 rounded shadow-md w-full max-w-2xl text-center">
        <h2 class="text-3xl text-green-400 font-semibold mb-6">Edit File</h2>

        <form method="POST" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data" class="space-y-4 text-left">
            @csrf
            @method('PUT')

            <label class="block font-semibold">Name</label>
            <input name="name" value="{{ $task->name }}" required class="w-full p-2 border border-gray-300 rounded">

            <label class="block font-semibold">Email</label>
            <input name="email" type="email" value="{{ $task->email }}" required class="w-full p-2 border border-gray-300 rounded">

            <label class="block font-semibold">Phone</label>
            <input name="phone" value="{{ $task->phone }}" required class="w-full p-2 border border-gray-300 rounded">

            <label class="block font-semibold">Address</label>
            <input name="address" value="{{ $task->address }}" required class="w-full p-2 border border-gray-300 rounded">

            <label class="block font-semibold">Bio</label>
            <textarea name="bio" required class="w-full p-2 border border-gray-300 rounded">{{ $task->bio }}</textarea>

            <label class="block font-semibold">Hobbies</label>
            <input name="hobbies" value="{{ $task->hobbies }}" required class="w-full p-2 border border-gray-300 rounded">

            <label class="block font-semibold">Date of Birth</label>
            <input type="date" name="date_of_birth" value="{{ $task->date_of_birth }}" required class="w-full p-2 border border-gray-300 rounded">

            <label class="block font-semibold">Upload Image</label>
            <input type="file" name="image" class="w-full">

            @if($task->image_path)
                <div>
                    <p class="mb-2 font-semibold">Current Image:</p>
                    <img src="{{ asset('storage/' . $task->image_path) }}" width="100" class="mx-auto rounded">
                </div>
            @endif

            <button type="submit"
                class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 transition">Update File</button>
        </form>
    </div>

</body>
</html>
