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
            <h3 class="text-1x2 font-bold">Recent History</h3>
            <br> 

            <form id="incomeExpenseForm" action="/process_form" method="post">
                @csrf

    <!-- Your other form fields here -->

    <div style="margin-bottom: 15px;">
        <label for="income" style="display: block; font-weight: bold;">Set Income:</label>
        <input type="number" id="income" name="income" min="0" max="500000" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    
    <div style="margin-bottom: 15px;">
        <label for="expense" style="display: block; font-weight: bold;">Set Expense:</label>
        <input type="number" id="expense" name="expense" min="0" max="500000" style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    
    <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium" type="submit">Submit</button>
</form>

                <br> <br>
                
                <style>
                    .square-container {
                        width: 300px; /* You can adjust the width and height to your desired size */
                        height: 200px; /* Make sure width and height have the same value for a square */

                    }
                

                </style>
                
                <div class="bg-gray-300 p-4 rounded square-container">
                    <p class="text-lg font">Total Income $<span id="totalIncome">0</span></p>
                    <br>
                    <p class="text-lg font">Total Expenses $<span id="totalExpenses">0</span></p>
                    <br>
                    <p class="text-lg font">Total Balance $<span id="totalBalance">0</span></p>
                </div>
                <script>
                    const form = document.getElementById('incomeExpenseForm');
                    const incomeInput = document.getElementById('income');
                    const expenseInput = document.getElementById('expense');
                    const totalIncomeDisplay = document.getElementById('totalIncome');
                    const totalExpensesDisplay = document.getElementById('totalExpenses');
                    const totalBalanceDisplay = document.getElementById('totalBalance');
                    
                    form.addEventListener('submit', function(event) {
                        event.preventDefault();
                        
                        const incomeValue = parseFloat(incomeInput.value);
                        const expenseValue = parseFloat(expenseInput.value);
                        
                        // Update total income, expenses, and balance
                        totalIncomeDisplay.textContent = (parseFloat(totalIncomeDisplay.textContent) + incomeValue).toFixed(2);
                        totalExpensesDisplay.textContent = (parseFloat(totalExpensesDisplay.textContent) + expenseValue).toFixed(2);
                        totalBalanceDisplay.textContent = (parseFloat(totalIncomeDisplay.textContent) - parseFloat(totalExpensesDisplay.textContent)).toFixed(2);
                        
                        // Reset input fields
                        incomeInput.value = '';
                        expenseInput.value = '';
                    });
                </script>
                
            </div>
    </div>
@endsection
