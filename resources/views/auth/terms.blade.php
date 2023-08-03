@extends('layouts.app')

@section('content')
    <div class="flex h-screen">
        <div class="w-1/4 bg-blue-900 flex justify-center items-center">
            <img src="path_to_your_logo.png" alt="Logo" class="h-16">
        </div>
        <div class="w-3/4 p-8">
            <form action="{{ route('terms') }}" method="post">
            @csrf
            <h2 class="text-2xl font-bold mb-4">Terms and Agreement</h2>
            <input type="text" name='user_id' value="{{ $user->id }}"/>
            <ol>
                <li>1. Account Creation:</li>
                <li>2. Privacy Policy:</li>
                <li>3. Payment:</li>
                <li>4. User Conduct:</li>
                <li>5. Intellectual Property:</li>
                <li>6. Disclaimer of Warranties:</li>
            </ol>
            <div class="flex justify-center mt-8">
                <button type='submit'> Accept
                </button>
                {{-- <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded font-medium mr-4">Accept</a> --}}
                <a href="{{ route('register') }}" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Back</a>
            </div>
        </form>
        </div>
    </div>
@endsection
