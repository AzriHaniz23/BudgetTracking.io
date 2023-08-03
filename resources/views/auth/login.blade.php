@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif
            <br>
            <h2 class="text-2xl font-bold mb-6">Sign in</h2>

            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4 relative">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg pr-10 @error('password') border-red-500 @enderror" value="">
                    <div class="absolute inset-y-0 right-0 flex items-center mr-4">
                        <input type="checkbox" onclick="togglePasswordVisibility()" class="mr-2">
                        <label for="togglePassword" class="text-sm">Show Password</label>
                    </div>
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex justify-between mb-4">
                    <div>
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-blue-500 text-sm">Forgot Password?</a>
                </div>
                <br>
                <style>
                    .center-container {
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      height: 100%; /* This is optional, but it ensures the button stays vertically centered */
                    }
                  </style>
                  
                  <div class="center-container">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Login</button>
                  </div>
            </form>
        </div>

        <div class="w-6/12 bg-blue-900 text-white p-6 rounded-lg flex flex-col justify-center">
            <div class="flex flex-col items-center">
                <img src="path_to_your_logo.png" alt="Logo" class="h-8 mr-2">
            <br>
                <div class="flex items-center mb-4">
                    
                    <h2 class="text-2xl font-bold">New Here? Sign Up</h2>
                </div>
                <p class="text-lg mb-4">Sign Up to create your account.</p>
                <br><br>
                <a href="{{ route('register') }}" class="text-lg mb-4">Sign Up</a>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
@endsection
