@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <div class="w-1/5 bg-blue-700 text-white p-6">
            <!-- Left Sidebar -->
            <div class="flex items-center mb-6">
                <img src="path_to_your_logo.png" alt="Logo" class="h-8 mr-2">
                <h2 class="text-lg font-bold">Finance <br>Tracker</h2>
            </div>
            <hr class="my-6">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('dashboard') }}" class="text-white hover:text-gray-200">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('transactions') }}" class="text-white hover:text-gray-200">Transactions</a>
                </li>
                <li>
                    <a href="{{ route('income') }}" class="text-white hover:text-gray-200">Income</a>
                </li>
                <li>
                    <a href="{{ route('expenses') }}" class="text-white hover:text-gray-200">Expenses</a>
                </li>
            </ul>
            <hr class="my-6">
            <a href="{{ route('settings') }}" class="text-white hover:text-gray-200">Settings</a>
        </div>
        <div class="w-4/5 bg-white p-6">
            <!-- Right Content -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Personal Information</h2>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded font-medium">Sign Out</button>
                </form>
            </div>
            <hr class="my-8 mt-2 border-t-4 border-blue-500">

             <!-- Profile Picture Section -->
        <div class="flex items-center mb-4">
            <div class="w-20 h-20 rounded-full overflow-hidden">
                <img src="{{ asset('path_to_profile_picture.jpg') }}" alt="Profile Picture" class="w-full h-full object-cover">
            </div>
        </div>
        <p class="text-sm">Change Profile Picture (must be 2-5 MB)</p>
                <div class="flex mt-2">
                    <button class="bg-blue-700 text-white px-5 py-1 rounded mr-1">Upload <br> New <br> Image</button>
                    <button class="bg-blue-700 text-white px-5 py-1 rounded">Remove <br> Photo</button>
                </div>
            
                 <!-- Inputs -->
        <div class="mt-8">
            <!-- Full Name Input -->
            <div class="mb-4">
                <label for="full_name" class="block font-medium text-gray-700">Full Name:</label>
                <input type="text" id="full_name" name="full_name" class="mt-1 p-2 border rounded w-full" placeholder="Enter your full name">
            </div>

            <!-- Username Input -->
            <div class="mb-4">
                <label for="username" class="block font-medium text-gray-700">Username:</label>
                <input type="text" id="username" name="username" class="mt-1 p-2 border rounded w-full" placeholder="Enter your username">
            </div>
        
            <!-- Phone No Input -->
            <div class="mb-4">
                <label for="phone_no" class="block font-medium text-gray-700">Phone No:</label>
                <input type="text" id="phone_no" name="phone_no" class="mt-1 p-2 border rounded w-full" placeholder="Enter your phone no">
            </div>
            
            <!-- Email Address Input -->
            <div class="mb-4">
                <label for="email_address" class="block font-medium text-gray-700">Email Address:</label>
                <input type="text" id="email_address" name="email_address" class="mt-1 p-2 border rounded w-full" placeholder="Enter your email address">
            </div>
        </div>

        <div class="flex mt-3">
            <button class="bg-blue-700 text-white px-5 py-1 rounded mr-1">Change</button>
        </div>
        
        <!-- Add your content for the right side here -->

     <!-- New Section: Change Password -->
     <div class="bg-gray-700 p-6 rounded-lg mt-8">
        <h3 class="text-xl font-semibold text-white mb-4">Change Password</h3>
        <div class="mb-4">
            <label for="previous_password" class="block font-medium text-gray-300">Enter Previous Password:</label>
            <div class="relative">
                <input type="password" id="previous_password" name="previous_password" class="mt-1 p-2 border rounded w-full" placeholder="Enter your previous password">
                <button type="button" class="absolute right-2 top-2 text-gray-400" id="showPreviousPassword">
                    Show
                </button>
            </div>
        </div>

        <div class="mb-4">
            <label for="type_new_password" class="block font-medium text-gray-300">Type New Password:</label>
            <div class="relative">
                <input type="password" id="type_new_password" name="type_new_password" class="mt-1 p-2 border rounded w-full" placeholder="Enter your new password">
                <button type="button" class="absolute right-2 top-2 text-gray-400" id="showPreviousPassword">
                    Show
                </button>
            </div>
        </div>

        <div class="mb-4">
            <label for="confirm_password" class="block font-medium text-gray-300">Enter Confirm Password:</label>
            <div class="relative">
                <input type="password" id="confirm_password" name="confirm_password" class="mt-1 p-2 border rounded w-full" placeholder="Confirm your new password">
                <button type="button" class="absolute right-2 top-2 text-gray-400" id="showPreviousPassword">
                    Show
                </button>
            </div>
        </div>

        <!-- ... (similar structure for new password and confirm password) ... -->
        <div class="flex mt-3">
            <button class="bg-blue-700 text-white px-5 py-1 rounded mr-1">Confirm</button>
        </div>
    </div>
</div>
</div>
@endsection
