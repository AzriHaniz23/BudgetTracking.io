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
                <h2 class="text-2xl font-bold">Transaction History</h2>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded font-medium">Sign Out</button>
                </form>
            </div>

            <div class="flex space-x-4 mt-2">
                <button class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Sort</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Filter</button>
            </div>
            <br><br>
            <div class="flex space-x-4 mb-4">
                <div>
                    <!-- Item Section -->
                    <label for="item" class="block font-medium">Item:</label>
                    <input type="text" id="item" class="border border-gray-300 rounded px-3 py-2 w-36">
                </div>
                <div>
                    <!-- Merchant Section -->
                    <label for="merchant" class="block font-medium">Merchant:</label>
                    <input type="text" id="merchant" class="border border-gray-300 rounded px-3 py-2 w-36">
                </div>
                <div>
                    <!-- Payment Method Section -->
                    <label for="payment_method" class="block font-medium">Payment Method:</label>
                    <input type="text" id="payment_method" class="border border-gray-300 rounded px-3 py-2 w-36">
                </div>
                <div>
                    <!-- Date Section -->
                    <label for="date" class="block font-medium">Date:</label>
                    <input type="date" id="date" class="border border-gray-300 rounded px-3 py-2 w-36">
                </div>
            </div>
            <!-- Add your content for the right side here -->
        </div>
    </div>
@endsection