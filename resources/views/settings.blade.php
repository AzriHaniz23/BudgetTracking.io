@extends('layouts.app')

@section('content')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<div class="flex h-screen">
    <div class="w-1/5 bg-blue-700 text-white p-6">
        <!-- Left Sidebar -->
        <div class="flex items-center mb-6">
            <img src="{{ asset('storage/Dashboard_logo.png') }}" alt="Logo" class="mb-1 mr-2" style="width: 58px; height: 65px;">
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
            
            <div class="flex justify-between">

    <!-- Profile Picture Section -->
    <div class="md:w-1/3 ml-6">
        <div class="flex items-center mb-4">
            <div class="w-64 h-64 square-full rounded-xl overflow-hidden">
            {{-- <div class="w-64 h-64 rounded-full overflow-hidden"> --}}
                <img id="profilePicture" src="{{ asset('path_to_profile_picture.jpg') }}" alt="Profile Picture" class="w-full h-full object-cover">
            </div>
        </div>
        
        <p class="text-sm">Change Profile Picture (must be 2-5 MB)</p>
        <div class="flex mt-2 ml-6">
            <button id="uploadBtn" class="bg-blue-700 text-white px-5 py-1 rounded mr-4">Upload <br> Image</button>
            <button id="removeBtn" class="bg-blue-700 text-white px-5 py-1 rounded">Remove <br> Photo</button>
        </div>
    </div>
    

<div class="mt-1 md:w-2/3">
    <!-- Full Name Input -->
    <div class="mb-4 flex">
        <label for="full_name" class="block font-medium text-gray-700 w-2/2 pr-2 flex items-center">Full Name:</label>
        <input type="text" id="full_name" name="full_name" class="mt-1 p-2 border rounded w-2/5" placeholder="Enter your full name">
    </div>

    <!-- Username Input -->
    <div class="mb-4 flex">
        <label for="username" class="block font-medium text-gray-700 w-2/2 pr-2 flex items-center">Username:</label>
        <input type="text" id="username" name="username" class="mt-1 p-2 border rounded w-2/5" placeholder="Enter your username">
    </div>

    <!-- Phone No Input -->
    <div class="mb-4 flex">
        <label for="phone_no" class="block font-medium text-gray-700 w-2/2 pr-2 flex items-center">Phone No:</label>
        <input type="tel" id="phone_no" name="phone_no" class="mt-1 p-2 border rounded w-2/6" placeholder="Enter your phone no" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required>
        <div class="text-red-500 mt-1 ml-2 hidden" id="phone-error">Please enter a valid 10-digit phone number.</div>
    </div>    

    <!-- Email Address Input -->
    <div class="mb-4 flex">
        <label for="email_address" class="block font-medium text-gray-700 w-2/2 pr-2 flex items-center">Email Address:</label>
        <input type="email" id="email_address" name="email_address" class="mt-1 p-2 border rounded w-2/6" placeholder="Enter your email address">
        <div class="text-red-500 mt-1 ml-2 hidden" id="email-error">Please enter a valid email address.</div>
    </div>
    
    <div class="flex justify-left pl-8">
        <button class="bg-blue-700 text-white px-5 py-1 rounded">Confirm</button>
    </div>
    
    <!-- Change Password section -->
    <div class="bg-gray-700 p-4 rounded-lg mt-6 max-w-lg mx-auto sm:mx-0">
        <div class="flex justify-center mb-2">
            <h3 class="text-xl font-semibold text-white">Change Password</h3>
        </div>
        <div class="mb-2">
            <label for="previous_password" class="block font-medium text-gray-300">Previous Password:</label>
            <div class="relative flex items-center">
                <input type="password" id="previous_password" name="previous_password" class="mt-1 p-1 border rounded w-full" placeholder="Previous password">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                    <input type="checkbox" id="showPreviousPassword" class="form-checkbox h-5 w-5 text-gray-600">
                    <label for="showPreviousPassword" class="ml-2 text-sm text-gray-600">Show Password</label>
                </div>
            </div>
        </div>
    
        <div class="flex justify-between">
            <div class="mb-2 mr-2 w-1/2">
                <label for="type_new_password" class="block font-medium text-gray-300">New Password:</label>
                <div class="relative">
                    <input type="password" id="type_new_password" name="type_new_password" class="mt-1 p-1 border rounded w-full" placeholder="New password">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <input type="checkbox" id="showNewPassword" class="form-checkbox h-5 w-5 text-gray-600">
                    </div>
                </div>
            </div>
    
            <div class="mb-2 ml-2 w-1/2">
                <label for="confirm_password" class="block font-medium text-gray-300">Confirm Password:</label>
                <div class="relative">
                    <input type="password" id="confirm_password" name="confirm_password" class="mt-1 p-1 border rounded w-full" placeholder="Confirm password">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <input type="checkbox" id="showConfirmPassword" class="form-checkbox h-5 w-5 text-gray-600">
                    </div>
                </div>
            </div>
        </div>
    
        <div class="flex justify-center mt-2">
            <button class="bg-blue-700 text-white px-5 py-1 rounded">Change</button>
        </div>
    </div>
</div>

</div>
</div>
    
    <script>
        function setupShowPasswordButton(buttonId, inputId) {
            const showButton = document.getElementById(buttonId);
            const passwordField = document.getElementById(inputId);
    
            showButton.addEventListener('click', function() {
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                } else {
                    passwordField.type = 'password';
                }
            });
        }
    
        setupShowPasswordButton('showPreviousPassword', 'previous_password');
        setupShowPasswordButton('showNewPassword', 'type_new_password');
        setupShowPasswordButton('showConfirmPassword', 'confirm_password');
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadBtn = document.querySelector('#uploadBtn');
            const removeBtn = document.querySelector('#removeBtn');
            const profilePicture = document.querySelector('#profilePicture');
            
            // Function to handle image upload
            uploadBtn.addEventListener('click', function() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                input.addEventListener('change', function() {
                    const file = input.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            profilePicture.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });
                input.click();
            });
            
            // Function to handle image removal
            removeBtn.addEventListener('click', function() {
                profilePicture.src = '{{ asset('path_to_default_image.jpg') }}'; // Replace with your default image path
            });
        });
    </script>
    <script>
        const phoneInput = document.getElementById('phone_no');
        const phoneError = document.getElementById('phone-error');
    
        phoneInput.addEventListener('input', () => {
            if (phoneInput.validity.valid) {
                phoneError.classList.add('hidden');
            } else {
                phoneError.classList.remove('hidden');
            }
        });
    </script>
    <script>
    const emailInput = document.getElementById('email_address');
    const emailError = document.getElementById('email-error');

    emailInput.addEventListener('input', () => {
        if (emailInput.validity.valid) {
            emailError.classList.add('hidden');
        } else {
            emailError.classList.remove('hidden');
        }
    });
</script>
</div>
</div>
@endsection