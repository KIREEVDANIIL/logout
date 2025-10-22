<x-layout>
    <div class="bg-white p-6 rounded ">
        <h1 class="text-2xl font-bold mb-4 ml-6">Главная страница</h1>
        
        @auth
            <div class="p-4 rounded mb-4 ml-2">
                <h2 class="text-xl mb-2 font">Здравствуйте, {{ Auth::user()->fio }}, на этом сайте выкладываются различные посты</h2>
            </div>
        @endauth
        

    </div>
</x-layout>
