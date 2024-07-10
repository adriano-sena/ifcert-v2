<x-app-layout>
    <div class="flex h-screen">
        @include('components.sidebar')
        <main>
            {{ $slot }}
        </main>
    </div>
</x-app-layout>
