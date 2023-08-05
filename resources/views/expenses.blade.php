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
            <h2 class="text-2xl font-bold">Expenses</h2>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded font-medium">Sign Out</button>
            </form>
        </div>
        
        <div class="bg-gray-300 p-4 rounded square-container">
            <div class="gray-box text-center">
                Total Expenses: $0
            </div>
        </div>
        <br>
        <div class="flex">
            <div class="bg-gray-300 p-4 rounded square-container2">
                <div class="gray-box">
                    Expenses (i.e. groceries)
                </div>
            </div>
            <div class="bg-gray-300 p-4 rounded square-container6 ml-4">
                <div class="gray-box"><br>
                    Groceries
                    <br><br><br><br>
                    Laptop
                    <br>
                    Repair
                    <br><br><br><br>
                    Netflix
                    <br>
                    Subscription
                </div>
            </div>
        </div>
        
        <br>
        <div class="bg-gray-300 p-4 rounded square-container2">
            <div class="gray-box">
                Expenses Amount
            </div>
        </div>
        <br>
        <div class="bg-gray-300 p-4 rounded calendar-container">
            <input type="date" id="selectedDate" class="calendar-input">
        </div>
        
        <br>
        <div class="bg-gray-300 p-4 rounded square-container4">
            <div class="gray-box">
                <select>
                    <option value="" disabled selected>Total Expenses</option>
                    <option value="option1">Expenses 1</option>
                    <option value="option2">Expenses 2</option>
                    <option value="option3">Expenses 3</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>
        
        <br>
        <div class="bg-gray-300 p-4 rounded square-container5">
            <div class="gray-box">
                Add other details / references
            </div>
        </div>
        <button class="add-income-button">Add Expenses</button>
        </div>
        
        <!-- Add your content for the right side here -->
        </div>
        </div>
        @endsection
        
        <style>
            .square-container {
                width: 1000px;
                height: 50px;
            }
            .square-container6 {
                width: 534px;
                height: 325px;
            }
            .square-container2 {
                width: 450px;
                height: 50px;
            }
        
            .calendar-container {
            width: 400px;
            padding: 10px;
        
        }
        
        .calendar-input {
            width: 100%;
            padding: 8px;
        
        }
        
            .square-container4 {
                width: 300px;
                height: 50px;
            }
            .square-container5 {
                width: 450px;
                height: 200px;
            }
        
            .add-income-button {
                margin-top: 10px;
                padding: 8px 16px;
                background-color: #234ab2; 
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        </style>
