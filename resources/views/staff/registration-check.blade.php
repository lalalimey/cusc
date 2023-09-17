<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('registration list') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <form action="/apply/detail" method="POST">
                        @csrf

                        <div class="my-posts">
                            @foreach($users as $user)
                                @if($user->register > 0)
                                    <form action="/apply/detail" method="POST">
                                    @csrf
                                    <div class="rounded-md dark:bg-gray-600 bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-4 lg:p-6 mb-4">
                                        <div>
                                            <div class="text-gray-500 dark:text-gray-400 leading-relaxed flex">
                                                {{$user->firstname}} {{$user->lastname}}
                                            </div>
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                            <div class="flex justify-end">
                                                @if($user->approve != null)
                                                    <x-button class="disabled:opacity-25 " disabled>approved</x-button>
                                                @else()
                                                    <x-button type="submit" name="action">detail</x-button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endif
                            @endforeach
                        </div>
                    </form>
                    <div class="pagination-links">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
