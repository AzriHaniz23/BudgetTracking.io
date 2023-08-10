@extends('layouts.app')

@section('content')
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
            <div class="left-column">
                <div class="bg-gray-300 p-4 rounded square-container2">
                    <div class="gray-box">
                        <label for="expense-input" class="sr-only">Expenses (i.e. groceries)</label>
                        <input type="text" id="expense-input" placeholder="Expenses (i.e. groceries)" class="placeholder-gray-500 w-full">
                    </div>
                </div>
        
                <div class="bg-gray-300 p-4 rounded square-container3 mt-4">
                    <div class="gray-box">
                        <label for="expense-amount-input" class="sr-only">Expenses Amount</label>
                        <input type="number" id="expense-amount-input" placeholder="Expenses amount" class="placeholder-gray-500 w-full">
                    </div>
                </div>
        
                <div class="bg-gray-300 p-4 rounded calendar-container mt-4">
                    <input type="date" id="selectedDate" class="calendar-input">
                </div>
        
                <div class="bg-gray-300 p-4 rounded square-container4 mt-4">
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
        
                <div class="bg-gray-300 p-4 rounded square-container5 mt-4">
                    <div class="gray-box">
                        <label for="other-details-input" class="sr-only">Add other details / references</label>
                        <textarea id="other-details-input" placeholder="Add other details / references" class="w-full h-24 resize-y"></textarea>
                    </div>
                </div>
        
                <button class="add-expenses-button mt-4">Add Expenses</button>
            </div>
            
            <div class="right-column ml-4">
                <div class="bg-gray-300 p-4 rounded square-container6">
                    <div class="gray-box">
                        <div class="item item-space">Groceries</div>
                        <div class="item item-space">Laptop Repair</div>
                        <div class="item item-space">Netflix Subscription</div>
                    </div>
                </div>
            </div>
            
        
            
        
        <!-- Add your content for the right side here -->
        </div>
        
        </div>
        @endsection
        
<style>
    .square-container {
    width: 1000px;
    height: 50px;
    margin: 0 auto;
}
    .square-container6 {
        width: 517px;
        height: 272px;
        margin: 0 -618px;
    }
    .square-container2 {
        width: 470px;
        height: 50px;
        margin: 0 83px;
    }
    .square-container3 {
        width: 470px;
        height: 50px;
        margin: 0 83px;
    }

    .calendar-container {
        width: 400px;
        padding: 10px;
        margin: 0 83px;
    }

    .calendar-input {
        width: 100%;
        padding: 8px;
    }

    .square-container4 {
        width: 300px;
        height: 50px;
        margin: 0 83px;
    }
    .square-container5 {
    width: 1000px;
    height: 150px;
    margin: 0 83px;
    margin-bottom: 20px; /* Add some margin at the bottom */
    display: flex; /* Use flexbox to align textarea */
    align-items: stretch; /* Stretch items vertically */
}

.square-container5 .gray-box {
    flex: 1; /* Distribute available space to textarea */
    display: flex;
    flex-direction: column;
}

.square-container5 textarea {
    flex: 1; /* Make textarea take up available space */
    width: 100%; /* Fill the width of the container */
    resize: none; /* Disable textarea resize */
}


    .add-expenses-button {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #234ab2; 
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 500px;
            }
            .gray-box {
    display: flex;
    flex-direction: column;
}

.item {
    margin-bottom: 69px; /* Adjust the spacing as needed */
}

.item-space {
    margin-top: 10px; /* Adjust the spacing as needed */
}

</style>

