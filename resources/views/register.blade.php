<x-layout title="Регистрация">
    <div class="min-h-screen flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full">
            <div class="bg-white rounded-2xl shadow-xl p-6">
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Регистрация</h1>
                </div>
                
                <form action="{{ route('register') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="fio" class="block text-sm font-medium text-gray-700 mb-2">ФИО</label>
                        <input type="text" 
                               name="fio" 
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               placeholder="Иванов Иван Иванович">
                        @error('fio')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" 
                               name="email" 
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               placeholder="your@email.com">
                        @error('email')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Пароль</label>
                        <input type="password" 
                               name="password" 
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                               placeholder="Придумайте пароль">
                        @error('password')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" 
                            class="w-full bg-gray-800 text-white py-2 rounded hover:bg-gray-700 transition duration-200 mt-2">
                        Зарегистрироваться
                    </button>
                </form>
                
                <div class="mt-6 pt-6 border-t border-gray-200 text-center">
                    <a href="{{ route('loginIndex') }}" 
                       class="inline-block mt-2 text-blue-600 hover:text-blue-700 font-medium transition duration-200">
                        Войти в систему
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
