<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('queue') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
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

                    <form action="/checkin/confirm" method="POST">
                        @csrf
                        <select name="date" id="date" class="dark:bg-gray-700 mb-4 rounded-md text-white" required>
                            <option value="">Select a date</option>
                            <option value="1">30 oct 2023</option>
                            <option value="2">31 oct 2023</option>
                            <option value="3">1 nov 2023</option>
                            <option value="4">2 nov 2023</option>
                            <option value="5">3 nov 2023</option>
                        </select>
                        <p class="mt-1 mb-1 ml-2 text-gray-500 dark:text-gray-400 leading-relaxed text-xl">student ID :</p>
                        <x-input id="id" type="text" name="id" class=" w-full mb-3" required />
                        <x-button type="submit" name="action">submit</x-button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
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
</script>
