<x-layout>
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Главная страница</h1>
        @auth
            <div class=" p-4 rounded mb-4">
                <h2 class="text-xl mb-2">{{ Auth::user()->fio }}!</h2>
            </div>
        @endauth
    
    </div>
    </div>
</x-layout>
