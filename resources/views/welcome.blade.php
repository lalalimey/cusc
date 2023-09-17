<!DOCTYPE html>
<html lang="en">
<head>
    <title>CUSC2023</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Press Start 2P', cursive;
        }
        .custom-text-sm {
            font-size: 32px; /* Adjust the size as needed */
        }
        .hover-icon::before {
            content: "->"; /* FontAwesome icon code (e.g., user icon) */
            font-family: 'Press Start 2P', cursive; /* FontAwesome font family */
            font-weight: 900; /* Use the appropriate weight for the icon */
            margin-right: 0.3rem; /* Adjust the spacing between the icon and text */
            display: none; /* Initially hide the icon */
        }

        /* Show the icon when the parent element is hovered */
        .hover-icon:hover::before {
            display: inline-block; /* Show the icon when hovered */
        }
    </style>
</head>
<body>
    <div class="bg-cover bg-center h-screen" style="background-image: url('/images/Bg_Web_With_Spotlight.png')">
        <div class="flex flex-col items-center ">
            <!-- Logo container -->
            <div class="flex justify-center lg:w-2/5 sm:w-3/4 lg:mt-0 lg:pt-0 sm:mt-20 sm:pt-20">
                <!-- Your SVG logo from the "image" directory -->
                <img src="{{asset('/images/ThemeLogo.svg')}}" alt="Logo" class="w-full h-auto" >
            </div>
        </div>
        <div class="flex flex-col items-center lg:mt-0 sm:mt-20">
            <div class="sm:mb-16 lg:mb-8 lg:mt-0 sm:mt-20">
                <a href="/login/google">
                    <button class="text-white custom-text-sm hover:text-yellow-500 hover-icon">log in</button>
                </a>
            </div>
            <div class="lg:mt-0 sm:mt-20">
                <a href="/about">
                    <button class="text-white custom-text-sm hover:text-yellow-500 hover-icon ">about us</button>
                </a>
{{--                <h1 class="text-white custom-text-sm glitch-text" >test</h1>--}}
            </div>
        </div>
    </div>
</body>
</html>







