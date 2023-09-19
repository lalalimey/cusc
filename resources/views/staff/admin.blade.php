<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 rounded-md">
                <h1 class="mb-4 text-2xl font-medium text-gray-900 dark:text-white">
                    receipt check system
                </h1>
                <a href="/check">
                    <x-button>check receipt</x-button>
                </a>
                <a href="/export-users">
                    <x-button>download excel</x-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

