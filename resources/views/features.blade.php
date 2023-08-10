@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg text-center">
            <h1 class="text-2xl font-bold">What We Offer</h1>
        </div>
    </div>



		<link rel="StyleSheet" href="welcome_01.css" /><div id="_bg__welcome_01"  ></div>
<div id="create_account" >
	Create account
</div>
<div id="_2023_financial_tracker__all_right_reserved_" >
	2023 Financial Tracker. All right reserved.
</div>
<div id="sign_up" >
	Sign Up
</div>
<div id="rectangle_406"  ></div>
<div id="finance_tracker" >
	Finance Tracker
</div>
<div id="untitled_artwork__4__5"  ></div>
<a href="{{ route('welcome_01') }}">
<div id="features" >
	Features
</div>
<a id="_about_us_link" href="about_us" >
<div id="{{ route('about_us') }}" >
    <div id="_about_us" >
	About Us
</div>
</a>
<a id="_contact_us_link" href="contact_us" >
<div id="{{ route('contact_us') }}" >
    <div id="_contact_us" >
	Contact Us
</div>
</a>

<a href="{{ route('register') }}">
	<div id="_rectangle_404"></div>
	<div id="register">Register</div>

<a href="{{ route('sign_in') }}">
<div id="_rectangle_405"></div>
<div id="sign_in">Sign In</div>

<a id="_rectangle_249_link" href="welcome_02" >
<div id="_rectangle_249"  ></div>
</a>

<a id="_rectangle_252_link" href="welcome_05" >
<div id="_rectangle_252"  ></div>
</a>

<a id="_rectangle_250_link" href="welcome_03" >
<div id="_rectangle_250"  ></div>
</a>

<a id="_rectangle_251_link" href="welcome_04" >
<div id="_rectangle_251"  ></div>
</a>

<div id="bank_2"  ></div>

<div id="calendar_2"  ></div>

<div id="pngwing_13"  ></div>

<div id="__pngtree_vector_transaction_icon_4101215__1__2"  ></div>

<div id="bank_financing" >
	Bank Financing
</div>

<div id="what_we_offer" >
	What We offer
</div>

<div id="daily_budgeting" >
	Daily Budgeting
</div>

<div id="track_expenses" >
	Track Expenses
</div>

<div id="previous_transaction" >
	Previous Transaction
</div>

<link href="{{ asset('css/welcome_01.css') }}" rel="stylesheet">
@endsection
