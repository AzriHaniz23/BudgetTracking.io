@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <div class="w-1/5 bg-blue-700 text-white p-6">
            <!-- Left Sidebar -->
            <div class="flex items-center mb-6">
                <img src="path_to_your_logo.png" alt="Logo" class="h-8 mr-2">
                <h2 class="text-lg font-bold">Finance <br>Tracker</h2>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <h2 class="text-2xl font-bold">Dashboard</h2>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded font-medium">Sign Out</button>
                </form>
            </div>

            <!-- Add your content for the right side here -->
            
            <br> 
            <h3 class="text-1xl font-bold">Recent History</h3>
            <div class="slidecontainer">
                <p>Set Income:</p>
                <input type="range" min="0" max="100000" value="50000">
            </div>
            <br> 
            <div class="slidecontainer">
                <p>Set Expense:</p>
                <input type="range" min="0" max="5000" value="2500">
                <br> <br>
                
                <style>
                    .square-container {
                        width: 200px; /* You can adjust the width and height to your desired size */
                        height: 150px; /* Make sure width and height have the same value for a square */

                    }
                

                </style>
                
 
                
                <div class="bg-gray-300 p-4 rounded square-container" >
                    <p class="text-lg font">Total Income $0</p>
                    <br>
                    <p class="text-lg font">Total Expenses $0</p>
                    <br>
                    <p class="text-lg font">Total Balance $0</p>
            </div>
        </div>
    </div>
@endsection
