<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('403 Forbidden') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 align-content-center">
                    {{ __("Forbidden: You don't have permission to access this page.") }}
                    <a class="text-dark" href="{{ route('dashboard') }}">Return to Home</a>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
