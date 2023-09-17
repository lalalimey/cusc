<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('registration detail') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <h1 class="text-2xl font-medium text-gray-900 dark:text-white mb-4">
                            {{$user->firstname}}'s slip
                        </h1>
                        @if ($path && Storage::exists($path))
{{--                            @php($cleanPath = Str::replace('public/images', 'storage/app/public/images', $path))--}}
                            <img src="{{ Storage::url($path) }}" class="w-3/4 h-auto mb-4" alt="User Slip">
                        @else
                            <p>No slip image available for this user. This may mean there is a mistake made by the developer. Please contact Line ID: verabhat immediately.</p>
                        @endif
                    </div>
                    <div>
                        <h1 class="text-2xl font-medium text-gray-900 dark:text-white mb-4">
                            user's information
                        </h1>
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">firstname :</h2>
                                <h3 class=" ml-3 mt-4 mb-4 text-gray-500 dark:text-white text-sm leading-relaxed font-semibold">{{$user->firstname}}</h3>
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">nickname :</h2>
                                <h3 class=" ml-3 mt-4 mb-4 text-gray-500 dark:text-white text-sm leading-relaxed font-semibold">{{$user->nickname}}</h3>
                            </div>
                            <div>
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">lastname :</h2>
                                <h3 class=" ml-3 mt-4 mb-4 text-gray-500 dark:text-white text-sm leading-relaxed font-semibold">{{$user->lastname}}</h3>
                                <?php
                                $studentid = str_replace('@student.chula.ac.th', '', $user->email);
                                ?>
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">student id :</h2>
                                <h3 class=" ml-3 mt-4 mb-4 text-gray-500 dark:text-white text-sm leading-relaxed font-semibold">{{$studentid}}</h3>

                            </div>
                        </div><br>
                        <h1 class="text-2xl font-medium text-gray-900 dark:text-white mb-4">
                            user's contact
                        </h1>
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">facebook :</h2>
                                <h3 class=" ml-3 mt-4 mb-4 text-gray-500 dark:text-white text-sm leading-relaxed font-semibold">{{$user->facebook}}</h3>
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">telephone :</h2>
                                <h3 class=" ml-3 mt-4 mb-4 text-gray-500 dark:text-white text-sm leading-relaxed font-semibold">{{$user->telephone}}</h3>
                            </div>
                            <div>
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">line :</h2>
                                <h3 class=" ml-3 mt-4 mb-4 text-gray-500 dark:text-white text-sm leading-relaxed font-semibold">{{$user->line}}</h3>
                            </div>
                        </div><br>
                        <div class="dark:bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg p-4">
                            <h1 class="text-2xl font-medium text-gray-900 dark:text-white mb-4">
                                register fee detail
                            </h1>
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">date of transfer :</h2>
                                    <h3 class=" ml-3 mt-4 mb-4 text-gray-500 dark:text-white text-sm leading-relaxed font-semibold">{{$user->date}}</h3>
                                </div>
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">time of transfer :</h2>
                                    <h3 class=" ml-3 mt-4 mb-4 text-gray-500 dark:text-white text-sm leading-relaxed font-semibold">{{$user->time}}</h3>
                                </div>
                            </div><br>
                        </div>
                        <form id="confirmapply" action="/apply/confirm" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="flex flex-row-reverse">
                                <x-button type="submit" class="mt-3" onclick="return confirmSubmit()">approve</x-button>
                                <button type="button" onclick="redirectToCheck()" class="mt-3 mr-3 inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg dark:bg-red-800 dark:text-white">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function redirectToCheck() {
            window.location.href = '/check';
        }
        function confirmSubmit() {
            return confirm("Are you sure you want to approve this registration?");
        }
    </script>
</x-app-layout>
