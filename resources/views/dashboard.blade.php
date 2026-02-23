@extends('layouts.app')

@section('title', __('messages.dashboard'))

@section('content')
<div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold mb-8">{{ __('messages.welcome') }}, {{ Auth::user()->name }}!</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Alumnos Card -->
        <div class="bg-white rounded shadow-md p-6 hover:shadow-lg transition">
            <div class="flex items-center mb-4">
                <i class="fas fa-users text-blue-600 text-3xl"></i>
                <h3 class="ml-4 text-xl font-bold">{{ __('messages.alumnos') }}</h3>
            </div>
            <p class="text-gray-600 mb-4">Gestiona los alumnos de la institución</p>
            <a href="{{ route('alumnos.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                {{ __('messages.manage') }}
            </a>
        </div>

        <!-- Proyectos Card -->
        <div class="bg-white rounded shadow-md p-6 hover:shadow-lg transition">
            <div class="flex items-center mb-4">
                <i class="fas fa-folder text-green-600 text-3xl"></i>
                <h3 class="ml-4 text-xl font-bold">{{ __('messages.proyectos') }}</h3>
            </div>
            <p class="text-gray-600 mb-4">Visualiza los proyectos disponibles</p>
            <a href="#" class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                {{ __('messages.view') }}
            </a>
        </div>

        <!-- Profile Card -->
        <div class="bg-white rounded shadow-md p-6 hover:shadow-lg transition">
            <div class="flex items-center mb-4">
                <i class="fas fa-user text-purple-600 text-3xl"></i>
                <h3 class="ml-4 text-xl font-bold">{{ __('messages.profile') }}</h3>
            </div>
            <p class="text-gray-600 mb-4">Actualiza tu información personal</p>
            <a href="{{ url('/profile') }}" class="inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                {{ __('messages.edit') }}
            </a>
        </div>
    </div>
</div>
@endsection
