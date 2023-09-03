<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // bgCard: '#17191a'
                    },

                }
            },
            // plugins: [
            //     require('@tailwindcss/typography'),
            //     // ...
            // ],
        }
    </script>
    <!-- flowbite css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
    <!-- select2 -->
    <title>@yield('title')</title>
    <!-- From UNPKG -->
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.4.x/dist/typography.min.css" />

    <style>
        .card:hover h1 {
            /* color: rgb(234 179 8); */
            color: black;
        }

        .card:hover {
            /* color: rgb(234 179 8); */
            border-left: #fff 2px solid;
            /* border-right: #fff 2px solid;
        border-bottom: #fff 2px solid; */
        }

        * {
            font-family: 'PT Sans', sans-serif;
        }

        /* Gaya Scroll Bar Minimalis */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #cdd2d9;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: rgba(0, 0, 0, 0.4);
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        /* #portfolio ul {
            list-style-type: disc !important;
            list-style-position: inside !important;
        } */

        /* #artikel ul {
            list-style-type: disc !important;
            list-style-position: inside !important;
        }

        #artikel ol {
            list-style-type: decimal !important;
            list-style-position: inside !important;
        } */
    </style>
</head>

<body class="bg-gray-100">
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>
    <nav class="bg-white fixed w-full z-20 top-0 left-0 border border-gray-300">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3">
            <a href="/" class="flex items-center">
                <span
                    class="self-center text-xl font-semibold whitespace-nowrap bg-black text-white px-3 py-1 rounded-sm">alifakbar</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="{{ route('home.index') }}"
                            class="block py-2 pl-3 pr-4 rounded text-blue-700 text-gray-900 hover:text-blue-700">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('home.index') }}"
                            class="block py-2 pl-3 pr-4 rounded text-blue-700 text-gray-900 hover:text-blue-700">Articles</a>
                    </li>
                    <li>
                        <a href="{{ route('home.portfolio') }}"
                            class="block py-2 pl-3 pr-4 rounded text-blue-700 text-gray-900 hover:text-blue-700">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <div class="flex justify-center">
        <div
            class="p-4 border bg-black border border-white text-white rounded-lg w-5/6 sm:w-11/12 fixed z-20 bottom-0 my-4">
            <h1 class="text-center font-base text-sm">&copy
                <span id="year"></span> | Alif Akbar Irdhobilla
            </h1>
        </div>
    </div>

    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>

    <!-- flowbite js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>


</html>
