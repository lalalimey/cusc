<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CU Singing Contest Register') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <form action="/apply/form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8 rounded-md">
                <h2 class="text-2xl font-medium text-gray-900 dark:text-white col-span-2 sm:col-span-2 lg:col-span-2">personal information</h2>
                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                    <x-label for="firstname" value="{{ __('Firstname') }}" />
                    <x-input id="firstname" type="text" class="mt-1 block w-full" name="firstname" required autocomplete="Firstname" />
                    <x-input-error for="firstname" class="mt-2" />
                </div>
                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                    <x-label for="lastname" value="{{ __('Lastname') }}" />
                    <x-input id="lastname" type="text" class="mt-1 block w-full" name="lastname" required autocomplete="Lastname" />
                    <x-input-error for="lastname" class="mt-2" />
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-2">
                    <x-label for="nickname" value="{{ __('Nickname') }}" />
                    <x-input id="nickname" type="text" class="mt-1 block w-full" name="nickname" required autocomplete="Nickname" />
                    <x-input-error for="Nickname" class="mt-2" />
                </div>
                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                    <x-label for="facebook" value="{{ __('facebook (please fill - if do not have)') }}" />
                    <x-input id="facebook" type="text" class="mt-1 block w-full" name="facebook" required autocomplete="Facebook" />
                    <x-input-error for="facebook" class="mt-2" />
                </div>
                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                    <x-label for="line" value="{{ __('Line ID (please fill - if do not have)') }}" />
                    <x-input id="line" type="text" class="mt-1 block w-full" name="line" required autocomplete="Line" />
                    <x-input-error for="line" class="mt-2" />
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-2">
                    <x-label for="phone" value="{{ __('telephone number (xxx-xxx-xxxx)') }}" />
                    <x-input id="phone" type="text" class="mt-1 block w-full" name="telephone" required autocomplete="phone" />
                    <x-input-error for="phone" class="mt-2" />
                </div>
                <h2 class="text-2xl font-medium text-gray-900 dark:text-white col-span-2 sm:col-span-2 lg:col-span-2">registration fee (300 baht)</h2>
                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/qr.jpg') }}" alt="QR Image" style="width: 222px; height: auto;">
                    </div>
                </div>
                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                    <x-label for="slip" value="{{ __('money transfer slip') }}" />
                    <x-input id="slip" type="file" name="slip" class="mt-1 block w-full" required />
                    <x-input-error for="slip" class="mt-2" />
                    <br>
                    <x-label for="date" value="{{ __('date of transfer') }}" />
                    <x-input id="date" type="date" class="mt-1 block w-full" name="date" required />
                    <x-input-error for="date" class="mt-2" />
                    <br>
                    <x-label for="time" value="{{ __('time of transfer') }}" />
                    <x-input id="time" type="time" class="mt-1 block w-full" name="time" required />
                    <x-input-error for="time" class="mt-2" />
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-2">
                    <div class="flex items-center">
                        <x-checkbox id="agree" class="mr-2" name="agree" required />
                        <x-label for="agree">
                            Agree to <a href="/term" ><span class="underline">terms and conditions</span></a>
                        </x-label>

                    </div>
                    <div class="flex justify-end">
                        <x-button type="submit" name="action">
                            {{ __('Submit') }}
                        </x-button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>
