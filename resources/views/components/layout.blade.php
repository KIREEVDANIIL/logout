<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green">

    @if (session()->has('ok'))
        <div class="bg-green-800 text-white p-2 text-center">
            {{ session('ok') }}
        </div>
    @endif


    @if (session()->has('alert'))
        <div class="bg-red-800 text-white p-2 text-center">
            {{ session('alert') }}
        </div>
    @endif
    
    <header class="bg-gray-800 p-8">
        <div class="flex justify-between">
            <a href="{{ route('home') }}" class="font-bold text-white text-xl hover:text-gray-500 ml-6">MySite</a>
            <div>

                @auth
                    <span class="mr-4 text-white text-xl">{{ Auth::user()->fio }}</span>
                    
                    <a href="{{ route('logout') }}" class="text-white text-xl hover:text-gray-500 font-medium p-1">Выход</a>
                @endauth


                @guest
                    <a href="{{ route('registerIndex') }}" class=" text-white text-xl hover:text-gray-500 font-medium  p-4">Регистрация</a>
                    <a href="{{ route('loginIndex') }}" class=" text-white text-xl hover:text-gray-500 font-medium p-4">Вход</a>
                @endguest
            </div>
        </div>
    </header>

    <main class="flex-grow p-4">
        {{ $slot }}
    </main>
