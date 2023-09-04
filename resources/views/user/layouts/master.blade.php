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
            background-color: #040D12;
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
                            class="block py-2 pl-3 pr-4 rounded {{ request()->is('/') ? 'text-blue-700' : '' }} text-gray-900 hover:text-blue-700">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('home.portfolio') }}"
                            class="block py-2 pl-3 pr-4 rounded text-blue-700 text-gray-900 hover:text-blue-700">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{ route('home.aboutMe') }}"
                            class="block py-2 pl-3 pr-4 rounded text-blue-700 text-gray-900 hover:text-blue-700">About
                            Me</a>
                    </li>
                    <li>
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                            class="block py-2 pl-3 pr-4 rounded text-blue-700 text-gray-900 hover:text-blue-700"
                            type="button">
                            Sign In
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- sign in --}}
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center "
                    data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 ">Sign in to alifakbar</h3>
                    <form class="space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                required>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login
                            to your account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @yield('content')
    <div class="flex justify-center">
        <div
            class="p-4 border bg-black border border-white text-white rounded shadow-xl w-5/6 sm:w-11/12 fixed z-20 bottom-0 my-4">
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
