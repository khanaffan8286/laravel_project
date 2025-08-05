<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Modern UI Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-blue-400 via-indigo-500 to-purple-600 min-h-screen flex items-center justify-center">
    <div class="bg-white bg-opacity-80 backdrop-blur-md rounded-3xl shadow-[0_25px_50px_-12px_rgba(0,0,0,0.25)] p-10 w-full max-w-md transform hover:scale-[1.03] transition-transform duration-300">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-extrabold text-gray-900 drop-shadow-md">Welcome Back</h2>
            <p class="text-gray-700 mt-2 text-lg">Sign in to your account</p>
        </div>
        
        <form class="space-y-8" action="{{ url('/login') }}" method="POST">
            @csrf

            @if ($errors->has('login'))
                <span class="text-red-500 text-sm block text-center mb-3">
                    {{ $errors->first('login') }}
                </span>
            @endif

            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-3">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                    value="{{ old('email') }}"
                    class="w-full px-5 py-3 rounded-xl bg-white shadow-inner placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-400 focus:ring-opacity-50 transition-shadow duration-300 border border-gray-300 hover:shadow-lg hover:scale-[1.02] transform"
                    placeholder="Enter your email"
                >
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700 mb-3">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    class="w-full px-5 py-3 rounded-xl bg-white shadow-inner placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-400 focus:ring-opacity-50 transition-shadow duration-300 border border-gray-300 hover:shadow-lg hover:scale-[1.02] transform"
                    placeholder="Enter your password"
                >
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div> 

            <div class="flex items-center justify-between">
                <label class="flex items-center space-x-2 text-sm font-medium text-gray-800">
                    <input
                        type="checkbox"
                        id="remember-me"
                        name="remember"
                        class="w-5 h-5 rounded-md border border-gray-400 text-indigo-600 focus:ring-indigo-500 focus:ring-2"
                    >
                    <span>Remember me</span>
                </label>
                <a href="#" class="text-indigo-600 font-semibold hover:text-indigo-700 hover:underline">Forgot password?</a>
            </div>
            
            <button
                type="submit"
                class="w-full py-3 rounded-xl bg-gradient-to-r from-indigo-500 via-purple-600 to-pink-600 text-white font-extrabold shadow-lg hover:shadow-xl hover:scale-[1.05] transform transition duration-300"
            >
                Sign In
            </button>
        </form>
        
        <p class="mt-10 text-center text-gray-800 font-medium">
            Don't have an account? <a href="#" class="text-indigo-600 font-bold hover:underline">Sign up</a>
        </p>
    </div>
</body>
</html>
