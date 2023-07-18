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
    <!-- Styles -->@livewireStyles
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

    @livewire('my-item')


    <aside id="default-sidebar" class="fixed top-0 right-0 z-20 w-96 h-screen bg-yellow-50 " aria-label="Sidebar">
        <div class="flex flex-col gap-2  h-full px-3 py-4 overflow-y-auto ">
            <div class="flex flex-row gap-8 mx-7 h-32 bg-pink-900 rounded-lg">
                <div class="w-15 h-18">
                    <img class="object-cover w-full h-full" src="{{ asset('img/source.svg') }}" alt="logo">
                </div>
                <div class="pt-4 ">
                    <p class="text-white">Didn’t find what you <br> need?</p>
                    <br>
                    <a class=" mt-1 bg-white rounded-lg p-2 px-6" href="{{ 'item' }}">Add item</a>

                </div>
            </div>

            <div class="bg-yellow-50 p-4 rounded-lg">
                <h2 class="text-2xl font-bold mb-4">Shopping List</h2>
                 <p>Fruit and vegetables</p>
                 <br>
                  <li class="flex items-center py-2">
                    <div class="flex-grow">
                      <h3 class="text-lg "><span><i class="fa-regular fa-square fa-xl" style="color: #c96513;"></i> </i></span>Avocado</h3>
                    </div>
                    <button class="border-2 h-8 flex justify-center items-center  rounded-full border-amber-500  text-amber-500 font-bold py-2 px-4 rounded">

                    <span class="text-gray-600">3 pcs</span>
                  </li>

                  <li class="flex items-center py-2">
                    <div class="flex-grow">
                      <h3 class="text-lg "><span><i class="fa-regular fa-square fa-xl" style="color: #c96513;"></i> </i></span>Pre-cooked corn 450g</h3>
                    </div>
                    <button class="border-2 h-8 flex justify-center items-center  rounded-full border-amber-500  text-amber-500 font-bold py-2 px-4 rounded">

                    <span class="text-gray-600">1 pcs</span>
                  </li>

                  <br>
                  <P>Meat and fish</P>
                  <br>
                  <li class="flex items-center py-2">
                    <div class="flex-grow">
                      <h3 class="text-lg "><span><i class="fa-regular fa-square fa-xl" style="color: #c96513;"></i> </i></span>Chicken 1kg</h3>
                    </div>
                    <button class="border-2 h-8 flex justify-center items-center  rounded-full border-amber-500  text-amber-500 font-bold py-2 px-4 rounded">

                    <span class="text-gray-600">3pcs</span>
                  </li>
                  <li class="flex items-center py-2">
                    <div class="flex-grow">
                      <h3 class="text-lg "><span><i class="fa-regular fa-square fa-xl" style="color: #c96513;"></i> </i></span>Pork fillets 450g</h3>
                    </div>
                    <button class="border-2 h-8 flex justify-center items-center  rounded-full border-amber-500  text-amber-500 font-bold py-2 px-4 rounded">

                    <span class="text-gray-600">1pcs</span>
                  </li>
                  <li class="flex items-center py-2">
                    <div class="flex-grow">
                      <h3 class="text-lg "><span><i class="fa-regular fa-square fa-xl" style="color: #c96513;"></i> </i></span>Salmon 1kg</h3>
                    </div>
                    <button class="border-2 h-8 flex justify-center items-center  rounded-full border-amber-500  text-amber-500 font-bold py-2 px-4 rounded">

                    <span class="text-gray-600">1pcs</span>
                  </li>
                  <li class="flex items-center py-2">
                    <div class="flex-grow">
                      <h3 class="text-lg "><span><i class="fa-regular fa-square fa-xl" style="color: #c96513;"></i> </i></span>Pork fillets 450g</h3>
                    </div>
                    <button class="border-2 h-8 flex justify-center items-center  rounded-full border-amber-500  text-amber-500 font-bold py-2 px-4 rounded">

                    <span class="text-gray-600">1pcs</span>
                  </li>

                  <!-- Agrega más elementos de la lista de compras aquí -->

                </ul>

                <div class="mt-4 text-right">
                 
        </div>
    </aside>



    @livewireScripts
</body>

</html>
