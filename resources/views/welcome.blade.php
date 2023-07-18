<!DOCTYPE html>
<html lang="en">
<head>
    <title>CUSC</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <style>
        .custom-font {
            font-family: 'Mitr', sans-serif;
        }
    </style>
</head>
<body >
{{--<img class="img-fluid" src="{{ asset('images/cusc.jpg') }}">--}}
<div class="bg-cover bg-center h-screen" style="background-image: url('/images/cusc.jpg')">
    <!-- Content goes here -->
    <br><br><br><br><br><br>
    <div class="custom-font text-cyan-200 text-center flex justify-center" style="font-size: 56px">CU Singing Contest</div>
    <div class="custom-font text-cyan-200 text-center flex justify-center" style="font-size: 32px">cusc typing slogan here</div>
    <br>
    <div class="flex justify-center">
        <a href="/login/google">
            <button class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white custom-font py-2 px-4 rounded-full flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                <span class="ml-2">Log in with CU account</span>
            </button>
        </a>
        <a href="/about">
            <button class="bg-transparent text-white custom-font py-2 px-4 rounded-full flex items-center ml-3" href="/about">
                <span class="hover:underline transition-all">Learn more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right ml-2 transition-colors" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </button>
        </a>

    </div>

</div>

</body>
</html>







