<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-400">
    <form method="POST" action="{{ route('login') }}" class="bg-purple-300 p-8 rounded-lg shadow-md w-full max-w-sm space-y-4">
        <h1 class="flex items-center justify-center text-4xl text-red-600">Log In</h1>
        @csrf
        <label for="">Name
            <input name="name" placeholder="Name" required
               class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </label>
        
        <label for="">Email
            <input name="email" type="email" placeholder="Email" required
               class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </label>
        
        <label for="">Password
            <input name="password" type="password" placeholder="Password" required
               class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </label>
        
        
        <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-200 border border-blue-600">
            Login
        </button>
    </form>
</body>
</html>
