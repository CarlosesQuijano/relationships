<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    @livewireStyles
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

                <input  wire:model="search" type="text" name="search" id="" placeholder="search item"
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
                        <button class="item-button" onclick="showItemDetails('{{ $item->name }}', '{{ $category->name }}', '{{ $item->note }}', '{{ $item->price }}', '{{ $item->client['nombre'] }}','{{ $item->unidades_medida }}','{{ $item->nombre}}',)">
                            {{ $item->name }}
                        </button>


                    </div>
                @endforeach
                @endforeach
            </div>
        </div>

        <aside id="default-sidebar" class="fixed top-0 right-0 z-20 w-96 h-screen  bg-white " aria-label="Sidebar">
            <form action="">
                <br>
                <div class="flex flex-col m-auto ml-6">

                    <a href="{{"/"}}"><i class="fa-sharp fa-solid fa-arrow-left"></i> Regresar</a>
                </div>
                    <br>
                <br>
                <div>
                    <figure class="max-w-lg">
                        <img id="item-image" class="rounded-lg m-auto w-60 h-40" src="https://picsum.photos/200" alt="image description">
                    </figure>
                </div>
                <br>
                <div class="flex flex-col pl-8">
                    <h6 class="">Name:</h6>
                    <h1 id="item-name" class="font-bold"></h1>

                    <h6 class="">Category:</h6>
                    <h1 id="item-category" class="font-bold"></h1>

                    <h6 class="">Note:</h6>
                    <h1 id="item-note" class="font-bold"></h1>
                    <h6 class="">Price:</h6>
                    <h1 id="item-price" class="font-bold"></h1>

                    <h6 class="">Unidades de medida:</h6>
                    <h1 id="item-client" class="font-bold"></h1>
                    
                    <h6 class="">Cliente:</h6>
                    <h1 id="item-unidades_medida" class="font-bold"></h1>
                </div>
                <div class="flex flex-row m-6 justify-between">
                    <div>
                        <a class="mt-4 flex w-50% items-center justify-center rounded-md border border-transparent px-8 py-3 text-base font-medium text-black focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">Vaciar</a>
                    </div>
                    <div>
                        <form action="{{ route('detalle.destroy', $item->id) }}" method="PUT">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="mt-2 flex w-50% items-center justify-center rounded-md border border-transparent bg-blue-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Eliminar</button>
                    </form>
                    </div>
                </div>
            </form>

        </aside>
        <script>
           function showItemDetails(name, category, note, price, unidades_medida, client) {
        document.getElementById('item-name').textContent = name;
        document.getElementById('item-category').textContent = category;
        document.getElementById('item-note').textContent = note;
        document.getElementById('item-price').textContent = price;
        document.getElementById('item-client').textContent = client;
        document.getElementById('item-unidades_medida').textContent = unidades_medida;


        // Show the sidebar
        document.getElementById('default-sidebar').style.display = 'block';
    }
        </script>
@livewireScripts
</body>

</html>
