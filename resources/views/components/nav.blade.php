<nav class="bg-blue-600 text-white shadow">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <div class="flex gap-6">
                @auth
                    <a href="{{ route('dashboard') }}" class="hover:text-blue-200">{{ __('messages.dashboard') }}</a>
                    <a href="{{ route('alumnos.index') }}" class="hover:text-blue-200">{{ __('messages.alumnos') }}</a>
                    <a href="{{ url('/') }}" class="hover:text-blue-200">{{ __('messages.proyectos') }}</a>
                @else
                    <a href="{{ url('/') }}" class="hover:text-blue-200">{{ __('messages.welcome') }}</a>
                @endauth
            </div>
            <div>
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-blue-200">{{ __('messages.logout') }}</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:text-blue-200 mr-4">{{ __('messages.login') }}</a>
                    <a href="{{ route('register') }}" class="hover:text-blue-200">{{ __('messages.register') }}</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
