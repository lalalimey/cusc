<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('first round contest detail') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if(session('success'))
            <div id="success-message" class="flex justify-center bg-lime-900 text-white leading-relaxed text-xl p-4 my-3 rounded-md">
                {{ session('success') }}
            </div>
        @endif
            @if(session('caution'))
                <div id="caution-message" class="flex justify-center bg-red-900 text-white leading-relaxed text-xl p-4 my-3 rounded-md">
                    {{ session('caution') }}
                </div>
            @endif
        <form action="/1/store" id="myForm" method="POST">
            @csrf
            <div class="dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8 rounded-md">
                <div class="dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8 rounded-md">
                    <div class="flex items-center col-span-2 sm:col-span-2 lg:col-span-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                            personal information
                        </h2>
                    </div>
                    <div>
                        @auth
                            <p class="mt-1 mb-1 ml-10 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">firstname : {{ Auth::user()->firstname }}</p>
                        @endauth
                    </div>
                    <div class="col-span-2 sm:col-span-2 lg:col-span-2">
                        @auth
                            <p class="mt-1 mb-1 ml-10 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">lastname : {{ Auth::user()->lastname }}</p>
                        @endauth
                    </div>
                    <div class="col-span-2 sm:col-span-2 lg:col-span-2">
                        @auth
                            <p class="mt-1 mb-1 ml-10 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">nickname : {{ Auth::user()->nickname }}</p>
                        @endauth
                    </div>
                    <div class="col-span-2 sm:col-span-2 lg:col-span-2">
                        @auth
                            <p class="mt-1 mb-1 ml-10 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">telephone : {{ Auth::user()->telephone }}</p>
                        @endauth
                    </div>
                </div>
                <div class="dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8 rounded-md">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                            <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                            contest information
                        </h2>
                    </div>
                    <div class="flex items-center ml-4 mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">contest venue : Chalerm Prommas</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex items-center ml-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">date :</p>
                        </div>
                        <select name="date" id="date" class="dark:bg-gray-700 ml-4 rounded-md text-white">

                            <option value="">Select a date</option>
                            <option value="1" @if(auth()->user()->day1 == '1') selected @endif @if(50-App\Models\User::where('day1', 1)->count() == 0) disabled @endif>30 oct 2023 ({{50-App\Models\User::where('day1', 1)->count()}} left)</option>
                            <option value="2" @if(auth()->user()->day1 == '2') selected @endif @if(50-App\Models\User::where('day1', 2)->count() == 0) disabled @endif>31 oct 2023 ({{50-App\Models\User::where('day1', 2)->count()}} left)</option>
                            <option value="3" @if(auth()->user()->day1 == '3') selected @endif @if(50-App\Models\User::where('day1', 3)->count() == 0) disabled @endif>1 nov 2023 ({{50-App\Models\User::where('day1', 3)->count()}} left)</option>
                            <option value="4" @if(auth()->user()->day1 == '4') selected @endif @if(50-App\Models\User::where('day1', 4)->count() == 0) disabled @endif>2 nov 2023 ({{50-App\Models\User::where('day1', 4)->count()}} left)</option>
                            <option value="5" @if(auth()->user()->day1 == '5') selected @endif @if(50-App\Models\User::where('day1', 5)->count() == 0) disabled @endif>3 nov 2023 ({{50-App\Models\User::where('day1', 5)->count()}} left)</option>
                        </select>
                    </div>
                    <div class="flex items-center ml-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
                        </svg>
                        <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">queue : TBD</p>
                    </div>
                    <div class="flex items-center ml-4 ">
                        <p class="mb-1 ml-4 text-gray-500 dark:text-gray-400 leading-relaxed">*please check in at venue to get queue</p><br>
                    </div>
                </div>
                <div class="dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8 rounded-md">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                            <path d="M9 13c0 1.105-1.12 2-2.5 2S4 14.105 4 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                            <path fill-rule="evenodd" d="M9 3v10H8V3h1z"/>
                            <path d="M8 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 13 2.22V4L8 5V2.82z"/>
                        </svg>
                        <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                            soundtrack
                        </h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="flex items-center ml-4 mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM4 8a4 4 0 1 1 8 0 4 4 0 0 1-8 0z"/>
                                <path d="M9 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                            <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">music :</p>
                        </div>
                        <div class="mt-4">
                            <x-input id="song" type="text" name="song" class=" w-full" value="{{auth()->user()->song1}}" required />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="flex items-center ml-4 mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                            </svg>
                            <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">artist :</p>
                        </div>
                        <div class="mt-4">
                            <x-input id="artist" type="text" name="artist" class="w-full" value="{{auth()->user()->artist1}}" required />
                        </div>
                    </div>
                    <div class="flex items-center ml-4 mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                            <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                            <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
                            <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                            <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">soundtrack : </p>
                    </div>
                    <div class="flex items-center ml-4 mt-4">
                        @if(auth()->user()->link1 != null)
                            <a href="{{auth()->user()->link1}}">
                                <x-button class="ml-4 disabled:opacity-25 ">link</x-button>
                            </a>
                        @else
                            <x-button class="ml-4 disabled:opacity-25 " disabled>link</x-button>
                        @endif
                        <x-input id="link" type="text" name="link" class="ml-4 w-3/4" value="{{auth()->user()->link1}}" required />
                    </div>
                </div>
                <div class="dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8 rounded-md">
                    <p class="dark:text-gray-400 leading-relaxed text-xl">you can still change music,artist and contest date until <span class="font-bold text-white">xx october 2023</span>. Do not inform this form on time mean you waiver.</p>
                    <div class="flex justify-end mt-4">
                        <x-button type="submit" name="action">submit</x-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
<script>
    // Wait for the DOM to load
    document.addEventListener("DOMContentLoaded", function () {
        // Get the success message element
        var successMessage = document.getElementById("success-message");

        // Check if the success message element exists
        if (successMessage) {
            // Delay the hiding of the message by 3 seconds (3000 milliseconds)
            setTimeout(function () {
                // Hide the success message by setting its display property to "none"
                successMessage.style.display = "none";
            }, 4000);
        }
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Get the success message element
        var cautionMessage = document.getElementById("caution-message");

        // Check if the success message element exists
        if (cautionMessage) {
            // Delay the hiding of the message by 3 seconds (3000 milliseconds)
            setTimeout(function () {
                // Hide the caution message by setting its display property to "none"
                cautionMessage.style.display = "none";
            }, 4000);
        }
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Get the form element by its ID
        var form = document.getElementById("myForm");

        form.addEventListener("submit", function (event) {
            // Get the selected value from the date select element
            var selectedDate = document.getElementById("date").value;

            // Check if the selected value is empty (i.e., "Select a date" option)
            if (selectedDate === "") {
                // Prevent the form from submitting
                event.preventDefault();

                // Optionally, display an error message or take some other action
                alert("Please select a date before submitting the form.");
            }
        });
    });

</script>

