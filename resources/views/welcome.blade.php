<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 font-sans antialiased">


<header class="bg-white shadow-md p-4 flex justify-between items-center">
    <div class="text-2xl font-bold text-blue-600">Vibe</div>

    <div class="flex space-x-4">
        @auth
            <a href="{{ route('profile.show') }}" class="text-gray-700 hover:text-blue-600">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-red-600 hover:text-red-800">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Log in</a>
            <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600">Register</a>
        @endauth
    </div>
</header>

@auth
<div class="max-w-3xl mx-auto mt-8 bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold mb-4">Rechercher un utilisateur</h2>
    <form action="{{ route('users.search') }}" method="GET" class="flex">
        <input type="text" name="query" placeholder="Rechercher par pseudo ou email..."
               class="border p-2 rounded-l w-full focus:outline-none focus:ring focus:border-blue-300" required>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600">🔍</button>
    </form>
</div>

<div class="max-w-5xl mx-auto mt-6">
    @if(isset($users) && $users->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($users as $user)
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                        @if($user->profile_photo_path)
                            <img class="w-24 h-24 rounded-full mx-auto object-cover"
                                 src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                 alt="{{ $user->name }}">
                        @endif

                    <h3 class="text-lg font-semibold text-gray-900">{{ $user->name }}</h3>
                    <p class="text-blue-600 font-medium">{{ $user->pseudo }}</p>
                    <p class="text-gray-600 mt-2">{{ $user->bio ?? '' }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-600 text-center mt-4">Aucun utilisateur trouvé.</p>
    @endif
</div>
@endauth
</body>
</html>
