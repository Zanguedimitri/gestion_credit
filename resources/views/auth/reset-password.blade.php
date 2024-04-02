<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="{{asset('styles/tailwind.min.css')}}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full sm:w-96">
        <h1 class="text-2xl font-semibold mb-4">Reset Password</h1>
        <p class="text-gray-700 mb-4">Please enter a new password for your account.</p>
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">


            @if ($errors->has('email'))
                <div class=" mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    <ul>
                        <li>{{$errors->first('email')}}</li>
                    </ul>
                </div>
            @endif
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Current Password</label>
                <input type="email" id="email" name="email" value="{{old('email', $request->email)}}" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">New Password</label>
                <input type="password" id="password" name="password" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="confirmPassword" class="block text-gray-700 font-medium">Confirm Password</label>
                <input type="password" id="confirmPassword" name="password_confirmation" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
            </div>
            @if ($errors->has('password'))
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    <ul>
                        <li>Your password is not correct</li>
                    </ul>
                </div>
            @endif
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Reset Password</button>
        </form>
        <p class="mt-4 text-gray-600 text-sm text-center"><a href="{{url('/')}}" class="text-blue-500 hover:underline">Back to Login</a></p>
    </div>
</body>
</html>

