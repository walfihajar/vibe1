<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased">
    <nav class="bg-white border-b border-gray-100 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">

            <!-- LOGO -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">Vibe</a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex sm:items-center space-x-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 font-medium">Ajouter des amis</a>
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 font-medium">Publications</a>
            </div>

            <!-- Authenticated User Dropdown -->
            @auth
                <div class="relative">
                    <button id="userMenuButton" class="flex items-center text-gray-600 hover:text-blue-600 focus:outline-none">
                        <img class="h-8 w-8 rounded-full object-cover mr-2" src="{{ Auth::user()->profile_photo_url ?? 'https://via.placeholder.com/40' }}" alt="{{ Auth::user()->name }}">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                <!-- Dropdown Menu -->
                <div id="userDropdown" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden">
                    <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil</a>
                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dashboard</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Déconnexion</button>
                    </form>
                </div>
            </div>
            @else
                <!-- If Not Authenticated -->
            <div class="hidden sm:flex sm:items-center space-x-4">
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 font-medium">Connexion</a>
                <a href="{{ route('register') }}" class="text-gray-600 hover:text-blue-600 font-medium">Inscription</a>
            </div>
            @endauth

            <!-- Hamburger Menu -->
            <div class="-mr-2 flex sm:hidden">
                <button id="mobileMenuButton" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-600 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path id="hamburgerOpen" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path id="hamburgerClose" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        </div>

        <!-- Responsive Menu -->
        <div id="mobileMenu" class="hidden sm:hidden px-4 pt-2 pb-3 space-y-2">
            <a href="{{ route('dashboard') }}" class="block text-gray-600 hover:text-blue-600">Dashboard</a>
            <a href="{{ route('home') }}" class="block text-gray-600 hover:text-blue-600">Publications</a>

            @auth
                <a href="{{ route('profile.show') }}" class="block text-gray-600 hover:text-blue-600">Profil</a>
                <form method="POST" action="{{ route('logout') }}" class="mt-2">
                    @csrf
                    <button type="submit" class="block w-full text-left text-gray-600 hover:text-blue-600">Déconnexion</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block text-gray-600 hover:text-blue-600">Connexion</a>
                <a href="{{ route('register') }}" class="block text-gray-600 hover:text-blue-600">Inscription</a>
            @endauth
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
<footer>
</footer>

{{--<script>--}}
{{--    // Toggle User Dropdown--}}
{{--    document.getElementById('userMenuButton')?.addEventListener('click', function() {--}}
{{--        document.getElementById('userDropdown').classList.toggle('hidden');--}}
{{--    });--}}

{{--    // Toggle Mobile Menu--}}
{{--    document.getElementById('mobileMenuButton')?.addEventListener('click', function() {--}}
{{--        document.getElementById('mobileMenu').classList.toggle('hidden');--}}
{{--        document.getElementById('hamburgerOpen').classList.toggle('hidden');--}}
{{--        document.getElementById('hamburgerClose').classList.toggle('hidden');--}}
{{--    });--}}
{{--</script>--}}
