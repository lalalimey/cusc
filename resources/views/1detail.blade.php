<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('first round contest detail') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-3 lg:gap-3 p-6 lg:p-8 mr-5 rounded-md">
                <div class="flex items-center col-span-2 sm:col-span-2 lg:col-span-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                    </svg>
                    <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                        personal information
                    </h2>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-2">
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
            <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-3 lg:gap-3 p-6 lg:p-8 ml-5 rounded-md">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                        <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                    </svg>
                    <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                        contest information
                    </h2>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-2 ml-10">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">contest venue : Chalerm Prommas</p>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">date : not selected</p>
                        <x-button type="submit" class="ml-4" onclick="">select</x-button>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
                        </svg>
                        <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">queue : TBD</p>
                    </div>
                    <div class="flex items-center">
                        <p class="mb-1 ml-4 text-gray-500 dark:text-gray-400 leading-relaxed">*please check in at venue to get queue</p><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 mt-8 lg:p-8 rounded-md">
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
            <div class="flex items-center ml-4 mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM4 8a4 4 0 1 1 8 0 4 4 0 0 1-8 0z"/>
                    <path d="M9 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
                <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">music and artist : not selected</p>
                <x-button type="submit" class="ml-4" onclick="">select</x-button>
            </div>
            <div class="flex items-center ml-4 mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -3 20 20" class="ml-1 w-8 h-8 fill-indigo-500 dark:fill-indigo-200">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM4 8a4 4 0 1 1 8 0 4 4 0 0 1-8 0z"/>
                    <path d="M9 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
                <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">soundtrack : </p>
                <x-button type="submit" class="ml-4 disabled:opacity-25 " onclick="" disabled>provided link</x-button>
                <x-button type="submit" class="ml-4" onclick="">select</x-button>
            </div>
        </div>
    </div>
</x-app-layout>
