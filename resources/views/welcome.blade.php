@extends('layouts.app')

@section('title', __('messages.welcome'))

@section('content')
<div class="max-w-6xl mx-auto">
    @if(Auth::check())
        <!-- Dashboard autenticado -->
        <h2 class="text-3xl font-bold mb-8">{{ __('messages.welcome') }}, {{ Auth::user()->name }}!</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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
        </div>
    @else
        <!-- Hero Section para usuarios no autenticados -->
        <div class="text-center py-20">
            <h1 class="text-5xl font-bold mb-4">{{ __('messages.welcome') }}</h1>
            <p class="text-xl text-gray-600 mb-8">Bienvenido a nuestra plataforma de gestión educativa</p>
            
            <div class="flex gap-4 justify-center mb-12">
                <a href="{{ route('register') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 text-lg">
                    {{ __('messages.register') }}
                </a>
                <a href="{{ route('login') }}" class="bg-gray-600 text-white px-8 py-3 rounded-lg hover:bg-gray-700 text-lg">
                    {{ __('messages.login') }}
                </a>
            </div>
        </div>

        <!-- Características -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
            <div class="bg-white p-6 rounded shadow-md text-center">
                <i class="fas fa-shield-alt text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Seguridad</h3>
                <p class="text-gray-600">Autenticación segura para proteger tus datos</p>
            </div>

            <div class="bg-white p-6 rounded shadow-md text-center">
                <i class="fas fa-users text-4xl text-green-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Gestión de Alumnos</h3>
                <p class="text-gray-600">Administra fácilmente la información de tus alumnos</p>
            </div>

            <div class="bg-white p-6 rounded shadow-md text-center">
                <i class="fas fa-globe text-4xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Multiidioma</h3>
                <p class="text-gray-600">Disponible en Español, Inglés y Francés</p>
            </div>
        </div>
    @endif
</div>
@endsection
