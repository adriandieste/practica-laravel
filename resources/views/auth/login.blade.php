@extends('layouts.app')

@section('title', __('messages.login'))

@section('content')
<div class="max-w-md w-full mx-auto bg-white rounded-lg shadow-md p-8">
    <h2 class="text-2xl font-bold mb-6 text-center">{{ __('messages.login') }}</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('messages.email') }}</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label for="password" class="block text-gray-700 font-bold mb-2">{{ __('messages.password') }}</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="remember" class="mr-2">
                <span class="text-gray-700">{{ __('messages.remember_me') }}</span>
            </label>
        </div>

        <!-- Login Button -->
        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
            {{ __('messages.login') }}
        </button>
    </form>

    <!-- No account yet? -->
    <div class="text-center mt-4">
        <p class="text-gray-700">
            {{ __('messages.no_account') }}
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">{{ __('messages.register_here') }}</a>
        </p>
    </div>

    <!-- Forgot Password Link -->
    <div class="text-center mt-2">
        <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline text-sm">{{ __('messages.forgot_password') }}</a>
    </div>
</div>
@endsection
