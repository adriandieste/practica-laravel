<footer class="bg-gray-800 text-white mt-12">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-3 gap-8">
            <div>
                <h3 class="font-bold text-lg mb-4">{{ config('app.name', 'Laravel') }}</h3>
                <p class="text-gray-400">{{ __('messages.welcome') }} a nuestra aplicación</p>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-4">{{ __('messages.alumnos') }}</h3>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="{{ route('alumnos.index') }}" class="hover:text-white">{{ __('messages.list') }}</a></li>
                    <li><a href="{{ route('alumnos.create') }}" class="hover:text-white">{{ __('messages.create_alumno') }}</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-4">Información</h3>
                <ul class="text-gray-400 space-y-2">
                    <li><a href="#" class="hover:text-white">Contacto</a></li>
                    <li><a href="#" class="hover:text-white">Privacidad</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2026 {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
