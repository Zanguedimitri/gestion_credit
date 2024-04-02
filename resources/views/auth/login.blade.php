<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="{{asset('styles/tailwind.min.css')}}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full sm:w-96">
        <h1 class="text-2xl font-semibold mb-4 text-center">Login Form</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            @if ($errors->has('email'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    <ul>
                        <li>{{$errors->first('email')}}</li>
                    </ul>
                </div>
            @endif
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" placeholder="Email"  class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 p-2">
            </div>
            @if ($errors->has('password'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    <ul>
                        <li>Your password is not correct</li>
                    </ul>
                </div>
            @endif
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium ">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"class="mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 p-2">
            </div>
            <div class="flex justify-between items-center">
                <div class="text-sm">
                    <a href="{{route('password.request')}}" class="text-blue-500 hover:underline">Forgot Password?</a>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Login</button>
            </div>        </form>
        <p class="mt-4 text-gray-600 text-sm text-center">Don't have an account? <a href="{{route('register')}}" class="text-blue-500 hover:underline">Sign up</a></p>
    </div>
</body>
</html>

