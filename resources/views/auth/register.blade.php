<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="{{asset('styles/tailwind.min.css')}}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full sm:w-96">
        <h1 class="text-2xl font-semibold mb-4">Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <label for="name" class="block text-gray-700 font-medium">Full Name</label>
                <input type="text" id="name" name="name" value="{{old('name')}}" class= "p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
            </div>
            <div class="mb-4">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
            </div>
            <div class="mb-4">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="password" value="{{old('password')}}"name="password" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
            </div>
            <div class="mb-4">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                <label for="confirmPassword" class="block text-gray-700 font-medium">Confirm Password</label>
                <input type="password" id="confirmPassword" name="password_confirmation" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Register</button>
        </form>
        <p class="mt-4 text-gray-600 text-sm text-center">Already have an account? <a href="{{url('/')}}" class="text-blue-500 hover:underline">Login</a></p>
    </div>
</body>
</html>

