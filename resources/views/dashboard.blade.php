<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <x-application-logo class="block h-12 w-auto" />

                    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
                        Welcome to CU Singing Contest
                    </h1>
                    <p class="mt-6 mb-4 text-gray-500 dark:text-gray-400 leading-relaxed">
                        If you don't register to this contest yet, please register using button below. There are 300 baht registration fee.
                        The register form will be open from 18 september to 30 september
                    </p>
                    @if(auth()->user()->register >= 1)
                        <x-button class="disabled:opacity-25 " disabled>registered</x-button>
                    @elseif($serviceStatus->status == 'off')
                        <x-button class="disabled:opacity-25 " disabled>registration closed</x-button>
                    @elseif($serviceStatus->status == 'on')
                        <a href="/apply">
                            <x-button>register</x-button>
                        </a>
                    @else
                        <x-button class="disabled:opacity-25 " disabled>registration closed</x-button>
                    @endif
                </div>

                <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                            </svg>
                            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                                <p>first round contest</p>
                            </h2>
                        </div>
                        <div class="mt-3 ml-10 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed ml-2">
                                30 october - 3 november 2023
                            </p>
                        </div>
                        <div class="mt-3 ml-10 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed ml-2">
                                TBD
                            </p>
                        </div>
                        <div class="mt-3 ml-10 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed ml-2">
                                Chalerm Prommas
                            </p>
                        </div>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            please fill out the form to inform music name and soundtrack using button below after registered and approved by staff. <span class="font-bold text-white">this form will be open until 17 october 2023.</span> Do not inform this form on time mean you waiver.
                        </p>
                        <div class="flex justify-end mt-2">
                            @if(auth()->user()->approve != null)
                                <a href="/1/detail">
                                    <x-button>detail</x-button>
                                </a>
                            @else
                                <x-button class="disabled:opacity-25 " disabled>detail</x-button>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z"/>
                            </svg>
                            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                                <p>second round contest</p>
                            </h2>
                        </div>
                        <div class="mt-3 ml-10 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed ml-2">
                                TBD
                            </p>
                        </div>
                        <div class="mt-3 ml-10 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed ml-2">
                                TBD
                            </p>
                        </div>
                        <div class="mt-3 ml-10 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed ml-2">
                                Chalerm Prommas
                            </p>
                        </div>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            this form will open after first round contest is finished and the result is announced
                        </p>
                        <div class="flex justify-end mt-2">
                            @php($serviceStatus1 = App\Models\service_status::find(2))
                            @if(auth()->user()->register >= 2 && $serviceStatus1->status == 'on')
                                <a href="/2/detail">
                                    <x-button>detail</x-button>
                                </a>
                            @else
                                <x-button class="disabled:opacity-25 " disabled>detail</x-button>
                            @endif
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
                            </svg>
                            <h2 class="ml-3 text-xl font-semibold text-gray-900 dark:text-white">
                                <p>final round contest</p>
                            </h2>
                        </div>
                        <div class="mt-3 ml-10 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed ml-2">
                                TBD
                            </p>
                        </div>
                        <div class="mt-3 ml-10 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed ml-2">
                                TBD
                            </p>
                        </div>
                        <div class="mt-3 ml-10 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 20 20" class="ml-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed ml-2">
                                chulalongkorn university auditorium
                            </p>
                        </div>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            this form will open after first round contest is finished and the result is announced.
                        </p>
                        <div class="flex justify-end mt-2">
                            @php($serviceStatus2 = App\Models\service_status::find(3))
                            @if(auth()->user()->register >= 3 && $serviceStatus2->status == 'on')
                                <a href="/3/detail">
                                    <x-button>detail</x-button>
                                </a>
                            @else
                                <x-button class="disabled:opacity-25 " disabled>detail</x-button>
                            @endif
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
