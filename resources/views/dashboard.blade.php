<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center md:text-center sm:text-center">
            {{ __('welcome Admin') }}
        </h2>
    </x-slot>

    <div class="flex">
        @include('backend.partials.nav.nav')
        <div class="w-full py-2 mx-5">
            <div class="w-100  overflow-hidden ">
                @yield('body')
            </div>
        </div>
    </div>
</x-app-layout>
