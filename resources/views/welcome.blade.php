<x-app-layout>
<!-- Banner -->
<div class="bg-gradient-to-r from-sky-500 to-indigo-500 text-white py-16 text-center">
    <h1 class="text-4xl font-bold">Bem-vindo ao Sistema de Eventos</h1>
    <p class="mt-4 text-xl">Encontre e gerencie seus eventos favoritos conosco</p>
</div>

<!-- Sobre o Sistema -->
<div class="container mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-center mb-8 text-blue-600">Sobre o Sistema</h2>
    <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Fácil de Usar</h3>
                <p class="text-gray-700">Nosso sistema é intuitivo e fácil de navegar, permitindo que você gerencie seus eventos com facilidade.</p>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Seguro</h3>
                <p class="text-gray-700">Segurança é nossa prioridade. Seus dados estão protegidos conosco.</p>
            </div>
        </div>
        <div class="w-full md:w-1/3 px-4">
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Eficiente</h3>
                <p class="text-gray-700">Gerencie seus eventos de maneira eficiente com nossas ferramentas avançadas.</p>
            </div>
        </div>
    </div>
</div>

<!-- Eventos Recentes -->
<div class="container mx-auto px-4 py-16 bg-gray-100">
    <h2 class="text-3xl font-bold text-center mb-8 text-blue-600">Eventos Recentes</h2>
    <div class="flex flex-wrap -mx-4">
        @for ($i = 0; $i < 6; $i++)
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-bold mb-4 text-blue-600">Evento {{ $i + 1 }}</h3>
                    <p class="text-gray-700">Descrição do evento {{ $i + 1 }}...</p>
                </div>
            </div>
        @endfor
    </div>
</div>
</x-app-layout>
