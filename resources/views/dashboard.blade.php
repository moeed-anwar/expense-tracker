<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <h1>Hello {{ auth()->user()->name }}</h1>
                  <h1 class=" sm:hidden text-lg">Want to treack your expenses click <a href="/index" class=" underline text-xl">Expense Tracker</a></h1>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
