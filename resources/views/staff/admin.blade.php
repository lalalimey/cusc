<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 mb-4 rounded-md">
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
            <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 mb-4 rounded-md">
                <h1 class="mb-4 text-2xl font-medium text-gray-900 dark:text-white">
                    check in system
                </h1>
                <a href="/checkin">
                    <x-button>check in</x-button>
                </a>
            </div>
            <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 mb-4 rounded-md">
                <h1 class="mb-4 text-2xl font-medium text-gray-900 dark:text-white">
                    user queue
                </h1>
                <form  action="/queue" method="POST">
                    <select name="date" id="date" class="dark:bg-gray-700 mr-4 rounded-md text-white" required>
                        <option value="">Select a date</option>
                        <option value="1">30 oct 2023</option>
                        <option value="2">31 oct 2023</option>
                        <option value="3">1 nov 2023</option>
                        <option value="4">2 nov 2023</option>
                        <option value="5">3 nov 2023</option>
                    </select>
                    <x-button type="submit" name="action">view queue</x-button>
                </form>
                @csrf

            </div>
        </div>
    </div>
</x-app-layout>

