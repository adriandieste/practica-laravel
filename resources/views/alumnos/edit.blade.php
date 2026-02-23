@extends('layouts.app')

@section('title', __('messages.edit_alumno'))

@section('content')
<div class="max-w-2xl mx-auto">
    <h2 class="text-3xl font-bold mb-6">{{ __('messages.edit_alumno') }}</h2>

    <form action="{{ route('alumnos.update', $alumno) }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-bold mb-2">{{ __('alumnos.nombre') }} *</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $alumno->nombre) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded @error('nombre') border-red-500 @enderror"
                   required>
            @error('nombre') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('alumnos.email') }} *</label>
            <input type="email" id="email" name="email" value="{{ old('email', $alumno->email) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded @error('email') border-red-500 @enderror"
                   required>
            @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="telefono" class="block text-gray-700 font-bold mb-2">{{ __('alumnos.telefono') }}</label>
            <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $alumno->telefono) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded">
        </div>

        <div class="mb-6">
            <label for="direccion" class="block text-gray-700 font-bold mb-2">{{ __('alumnos.direccion') }}</label>
            <textarea id="direccion" name="direccion" rows="4"
                      class="w-full px-3 py-2 border border-gray-300 rounded">{{ old('direccion', $alumno->direccion) }}</textarea>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                {{ __('messages.save') }}
            </button>
            <a href="{{ route('alumnos.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">
                {{ __('messages.cancel') }}
            </a>
        </div>
    </form>
</div>
@endsection
