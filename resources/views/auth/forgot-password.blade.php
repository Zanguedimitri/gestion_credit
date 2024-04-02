<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('styles/tailwind.min.css')}}" rel="stylesheet">
    <title>Forgot Password</title>

</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full sm:w-96">
        <h1 class="text-2xl font-semibold mb-4">Forgot Password</h1>
        <p class="text-gray-700 mb-4">Please enter your email address to receive a password reset link.</p>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            @if ($errors->has('email'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    <ul>
                        <li>{{$errors->first('email')}}</li>
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded relative">
                    <ul>
                        <li>{{session('status')}}</li>
                    </ul>
                </div>
            @endif
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" required placeholder="Email" value="{{old('email')}}" class="p-2 mt-1 block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Send Reset Link</button>
        </form>

        <p class="mt-4 text-gray-600 text-sm text-center"><a href="{{url('/')}}" class="text-blue-500 hover:underline">Back to Login</a></p>
    </div>
</body>
</html>
