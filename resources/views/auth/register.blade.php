<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-700">
  <form method="POST" action="{{ route('register') }}"
    class="bg-purple-500 p-8 rounded-lg shadow-md w-full max-w-sm space-y-4">
    <h1 class="flex items-center justify-center text-4xl text-black">Registration</h1>

    @csrf

    <label>Name
      <input name="name" placeholder="Name" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
    </label>

    <label>Email
      <input name="email" type="email" placeholder="Email" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
    </label>

    <label>Password
      <input name="password" type="password" placeholder="Password" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
    </label>

    <label>Confirm Password
      <input name="password_confirmation" type="password" placeholder="Confirm Password" required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
    </label>

    <button type="submit"
      class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-200 border border-blue-600">
      Register
    </button>
  </form>
</body>

</html>