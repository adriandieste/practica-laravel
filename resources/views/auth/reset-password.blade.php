@extends('layouts.app')

@section('title', __('messages.reset_password'))

@section('content')
<div class="max-w-md w-full mx-auto bg-white rounded-lg shadow-md p-8">
    <h2 class="text-2xl font-bold mb-6 text-center">{{ __('messages.reset_password') }}</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('messages.email') }}</label>
            <input type="email" id="email" name="email" value="{{ old('email', $request->email) }}" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-bold mb-2">{{ __('messages.password') }}</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">{{ __('messages.confirm_password') }}</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Reset Button -->
        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
            {{ __('messages.reset_password') }}
        </button>
    </form>
</div>
@endsection
