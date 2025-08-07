<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" justify-center  bg-gray-500">

    <form method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data"
        class="bg-white p-8 rounded-lg shadow-md w-fill space-y-4">
        <h2 class="text-2xl font-bold text-center text-blue-600">Create New Task</h2>

        @csrf

        <input name="title" placeholder="Title" required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <textarea name="description" placeholder="Description" required
            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>

        <input type="file" name="image"
            class="w-full border border-gray-300 rounded px-4 py-2 bg-white file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />

        <button type="submit"
            class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded transition duration-200">
            Create Task
        </button>
    </form>

</body>

</html>