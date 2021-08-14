<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-center leading-tight ml-0">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex ">
        @include('backend.partials.nav')
        @yield('body')
    </div>
</x-app-layout>
