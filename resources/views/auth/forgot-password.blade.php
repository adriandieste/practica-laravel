@extends('layouts.app')

@section('title', __('messages.forgot_password'))

@section('content')
<div class="max-w-md w-full mx-auto bg-white rounded-lg shadow-md p-8">
    <h2 class="text-2xl font-bold mb-6 text-center">{{ __('messages.forgot_password') }}</h2>

    @if (session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <p class="text-gray-700 mb-6">{{ __('messages.forgot_password_description') }}</p>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email -->
        <div class="mb-6">
            <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('messages.email') }}</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Send Button -->
        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
            {{ __('messages.send_reset_link') }}
        </button>
    </form>

    <!-- Back to login -->
    <div class="text-center mt-4">
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">{{ __('messages.back_to_login') }}</a>
    </div>
</div>
@endsection
