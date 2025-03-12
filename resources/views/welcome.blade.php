<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body>
    <main class="h-full bg-gray-900">
        <section class="p-12">
            <div class="container mx-auto">
                <h1 class="text-center text-4xl text-white font-black">Blog</h1>
                <p class="text-gray-100 text-center my-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="grid grid-cols-3 justify-between">
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                alt="" />
                        </a>
                        <div class="p-5">
                            <div class="pb-4 flex gap-4 items-center">
                                <p class="text-xs text-gray-500">Mar 16, 2020</p>
                                <a href="#"
                                    class="bg-blue-900 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Categoria</a>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <div class="flex gap-4 items-center pb-4">
                                <div>
                                    <img class="w-10 h-10 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="Rounded avatar">
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-white">Jese Leos</p>
                                    <p class="text-xs text-gray-400">Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
