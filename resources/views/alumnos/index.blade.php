@extends('layouts.app')

@section('title', __('messages.alumnos'))

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold">{{ __('alumnos.list') }}</h2>
        <a href="{{ route('alumnos.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
            {{ __('messages.create_alumno') }}
        </a>
    </div>

    @if($alumnos->count() > 0)
        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="w-full">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-6 py-3 text-left">{{ __('alumnos.nombre') }}</th>
                        <th class="px-6 py-3 text-left">{{ __('alumnos.email') }}</th>
                        <th class="px-6 py-3 text-left">{{ __('alumnos.telefono') }}</th>
                        <th class="px-6 py-3 text-left">{{ __('alumnos.direccion') }}</th>
                        <th class="px-6 py-3 text-center">{{ __('messages.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-3">{{ $alumno->nombre }}</td>
                            <td class="px-6 py-3">{{ $alumno->email }}</td>
                            <td class="px-6 py-3">{{ $alumno->telefono ?? '-' }}</td>
                            <td class="px-6 py-3">{{ $alumno->direccion ?? '-' }}</td>
                            <td class="px-6 py-3 text-center">
                                <a href="{{ route('alumnos.edit', $alumno) }}" class="text-blue-600 hover:text-blue-800 mr-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="deleteAlumno({{ $alumno->id }})" class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $alumnos->links() }}
        </div>
    @else
        <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 px-6 py-4 rounded">
            {{ __('messages.no_students') }}
        </div>
    @endif
</div>

<form id="deleteForm" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<script>
function deleteAlumno(id) {
    Swal.fire({
        title: '{{ __("messages.are_you_sure") }}',
        text: '{{ __("messages.delete_alumno") }}',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: '{{ __("messages.delete") }}',
        cancelButtonText: '{{ __("messages.cancel") }}'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById('deleteForm');
            form.action = '{{ route("alumnos.destroy", ":id") }}'.replace(':id', id);
            form.submit();
        }
    });
}
</script>
@endsection
