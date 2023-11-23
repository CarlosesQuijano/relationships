<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @livewireStyles
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=quicksand:500,700" rel="stylesheet" />
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet"> --}}
    <!-- Styles -->
    <script src="https://kit.fontawesome.com/a9775d2cf6.js" crossorigin="anonymous" defer></script>
    <!-- Styles -->
    @vite('resources/css/app.css')
    <!-- Styles -->
</head>

<body class="">
    <aside id="default-sidebar" class="fixed top-0 left-0 z-20 w-24 h-screen " aria-label="Sidebar">
        <div class="flex flex-col justify-between h-full px-3 py-4 overflow-y-auto bg-white">
            <div class="w-12 h-12  ">
                <img class="object-cover w-full h-full" src="{{ asset('img/logo.svg') }}" alt="logo">
            </div>
            <ul class="flex flex-col items-center gap-10 font-normal">
                <li class="flex items-center p-3 text-black rounded-lg hover:bg-slate-50 group">
                    <a href="#">
                        <i class="fa-solid fa-list-ul fa-xl"></i>
                    </a>
                </li>
                <li class="flex items-center p-3 text-black rounded-lg hover:bg-slate-50 group">
                    <a href="#">
                        <i class="fa-solid fa-clock-rotate-left fa-xl"></i>
                    </a>
                </li>
                <li class="flex items-center p-3 text-black rounded-lg hover:bg-slate-50 group">
                    <a href="#">
                        <i class="fa-solid fa-chart-line fa-xl"></i>
                    </a>
                </li>

            </ul>
            <div class="flex place-self-center static">
                <div class=" rounded-full bg-amber-400 text-center w-10 h-10 pt-2">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <span class="bg-red-500 w-5 h-5 rounded align-middle text-center absolute bottom-10 left-14">1</span>
            </div>
        </div>
    </aside>

    <div class="p-20 ml-24 bg-slate-50 mr-96 ">
        <div class="flex flex-row justify-between">
            <div class="flex w-96 text-2xl">
                {{-- <h1 class="me-1 font-bold text-orange-400">Shoppingify</h1> --}}
                <h1 class="font-bold">
                    <span class="text-blue-400">Freund</span>
                    allows you to take your shopping list wherever you go
                </h1>
            </div>

            <div class="flex items-center">

                <span class="material-symbols-outlined border-y-2 border-s-2 p-2 bg-white rounded-s-lg">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>

                <input type="text" name="search" id="" placeholder="search item"
                    class=" border-y-2 border-e-2 p-2 w-50 focus:outline-none bg-white rounded-e-lg ">
            </div>
        </div>



        <div class="mb-10">

            @foreach ($categories as $category)
        </div>
        <br>
        <div>
            <h3 class="mb-5">{{ $category->name }}</h3>
            <div id="contenido" class="grid grid-cols-4 gap-4">
                @foreach ($category->items as $item)
                    <div class="bg-white drop-shadow-md rounded-lg py-2 px-4 flex flex-row justify-between">
                        {{ $item->name }}<button></i></button></div>
                @endforeach
                @endforeach
            </div>
        </div>


        <aside id="default-sidebar" class="fixed top-0 right-0 z-20 w-96 h-screen  bg-slate-50 " aria-label="Sidebar">

            <form action="{{ route('item.create') }}" method="PUT">
                @csrf

                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <br>
                        <h1 class="font-bold">
                            Hacer una compra
                        </h1>
                        <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <div class="sm:col-span-4">
                                    <label for="email"
                                        class="block text-sm font-medium leading-6 text-gray-900">Producto</label>
                                    <div class="">
                                        <input id="#" name="name" type="text" autocomplete="email"
                                            class="block w-full rounded-md border-0 py-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>

                                <div class="sm:col-span-4">
                                    <label for="email"
                                        class="block text-sm font-medium leading-1 text-gray-900">Precio</label>
                                    <div class="mt-1">
                                        <input id="#" name="price" type="float" autocomplete="email"
                                            class="block w-full rounded-md border-0 py-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <div class="sm:col-span-2">
                                    <label for="email"
                                        class="block text-sm font-medium leading-6 text-gray-900">Unidades de medida</label>
                                    <div class="mt-2">
                                        <input id="#" name="unidades_medida" type="text" autocomplete="email"
                                            class="block w-full rounded-md border-0 py-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="about"
                                    class="block text-sm font-medium leading-6 text-gray-900">Note<span>(optional)</span></label>
                                <div class="">
                                    <textarea id="#" name="note" rows="1"
                                        class="block w-full rounded-md border-0 py-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <div class="sm:col-span-2 flex gap-4">
                                    <div class="w-1/2">
                                        <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                                        <div class="mt-2">
                                            <select name="category" id="categories" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option value="null" selected disabled> Escoge una categoria </option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="w-1/2">
                                        <label for="client" class="block text-sm font-medium leading-6 text-gray-900">Client</label>
                                        <div class="mt-2">
                                            <select name="client" id="clients" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option value="null" selected disabled> Escoge cliente </option>
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="cover-photo" class="block text-sm font-medium leading-2 text-gray-900">Cover
                                    photo</label>
                                <div
                                    class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-4 py-10">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="file-upload"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="image" type="file"
                                                    class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                                <div class="flex flex-row m-2 justify-between">
                                    <div>
                                        <a class="mt-2 flex w-50% items-center justify-center rounded-md border border-transparent  px-8 py-3 text-base font-medium text-black focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                                            href="{{ '/' }}">Cancel</button>
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="mt-2 flex w-50% items-center justify-center rounded-md border border-transparent bg-blue-600 px-8 py-1 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>

                                    </div>

                                </div>
                            </div>

        </aside>
        @livewireScripts
</body>

</html>
