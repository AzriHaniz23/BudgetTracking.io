@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <div class="w-1/2 bg-blue-900 text-white p-6 rounded-lg flex flex-col justify-center items-center">
            <img src="{{ asset('storage/logo.png') }}" alt="Logo" class="mb-4" style="width: 244px; height: 256px;">
            <h1 class="text-4xl font-bold mb-4">Welcome Back!</h1>
            <br>

            <p class="text-lg mb-4">Sign In to access your account.</p>
            <br><br>
            <a href="{{ route('login') }}" class="text-lg mb-4">Sign In</a>
        </div>
        <div class="w-1/2 bg-white flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg text-center">
                <h1 class="text-2xl font-bold">Create Account</h1>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                        @error('username')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg pr-10 @error('password') border-red-500 @enderror" value="">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <input type="checkbox" id="show-password1" class="form-checkbox h-5 w-5 text-gray-600">
                                <label for="show-password1" class="ml-2 text-sm text-gray-600">Show Password</label>
                            </div>
                        </div>
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">Password again</label>
                        <div class="relative">
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg pr-10 @error('password_confirmation') border-red-500 @enderror" value="">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <input type="checkbox" id="show-password2" class="form-checkbox h-5 w-5 text-gray-600">
                                <label for="show-password2" class="ml-2 text-sm text-gray-600">Show Password</label>
                            </div>
                        </div>
                        @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br><br>
                    <div>
                        <button type='submit' class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-half"> Sign Up 
                        </button>
                        {{-- <a href="{{ route('terms') }}" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Sign Up</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Place this JavaScript code at the bottom of your HTML file, before the closing </body> tag -->
    <script>
        const showPasswordCheckbox1 = document.getElementById('show-password1');
        const passwordInput1 = document.getElementById('password');

        showPasswordCheckbox1.addEventListener('change', function () {
            if (this.checked) {
                passwordInput1.type = 'text';
            } else {
                passwordInput1.type = 'password';
            }
        });

        const showPasswordCheckbox2 = document.getElementById('show-password2');
        const passwordInput2 = document.getElementById('password_confirmation');

        showPasswordCheckbox2.addEventListener('change', function () {
            if (this.checked) {
                passwordInput2.type = 'text';
            } else {
                passwordInput2.type = 'password';
            }
        });
    </script>
@endsection
