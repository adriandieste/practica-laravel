@extends('layouts.app')

@section('title', __('messages.verify_email'))

@section('content')
<div class="max-w-md w-full mx-auto bg-white rounded-lg shadow-md p-8">
    <h2 class="text-2xl font-bold mb-6 text-center">{{ __('messages.verify_email') }}</h2>

    @if (session('status') == 'verification-link-sent')
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ __('messages.new_verification_link_sent') }}
        </div>
    @endif

    <p class="text-gray-700 mb-6">{{ __('messages.verify_email_description') }}</p>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf

        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
            {{ __('messages.resend_verification_email') }}
        </button>
    </form>

    <!-- Logout link -->
    <div class="text-center mt-4">
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-blue-600 hover:underline">{{ __('messages.logout') }}</button>
        </form>
    </div>
</div>
@endsection
