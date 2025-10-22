<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
    @if (session()->has('ok'))
        <div class="bg-black text-white p-2 text-center">
            {{ session('ok') }}
        </div>
    @endif
    @if (session()->has('alert'))
        <div class="bg-black text-white p-2 text-center">
            {{ session('alert') }}
        </div>
    @endif
    
    <header class="bg-gray-800 p-8">
        <div class="flex justify-between">
            <a href="{{ route('home') }}" class="font-bold text-white hover:text-gray-500">Сайт</a>
            <div>
                @auth
                    <span class="mr-4">{{ Auth::user()->fio }}</span>
                    
                    <a href="{{ route('logout') }}" class="text-white hover:text-gray-500 font-medium p-1">Выход</a>
                @endauth
                @guest
                    <a href="{{ route('registerIndex') }}" class=" text-white hover:text-gray-500 font-medium  p-4">Регистрация</a>
                    <a href="{{ route('loginIndex') }}" class=" text-white hover:text-gray-500 font-medium p-4">Вход</a>
                @endguest
            </div>
        </div>
    </header>

    <main class="p-4">
        {{ $slot }}
    </main>

</body>
</html>

