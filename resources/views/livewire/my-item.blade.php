<div>
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

                <input wire:model="search" type="text" name="search" id="" placeholder="search item"
                    class=" border-y-2 border-e-2 p-2 w-50 focus:outline-none bg-white rounded-e-lg ">
                    <a class=" mt-1 bg-slate-50 rounded-lg p-2 px-6" href="{{"detalle"}}">Ver detalles de productos</a>
            </div>
        </div>
        <div class="mt-12">
            <div class="font-quicksand font-medium">
                @if (count($items) == 0)
                    <h2 class="font-quicksand font-bold">Theres is not results</h2>
                @else
                    @foreach ($categories as $category)
                        @php
                            $categoryItems = $items->where('category_id', $category->id);
                        @endphp
                        @if ($categoryItems->count() > 0)
                            <div class="mb-3 mt-8">{{ $category->name }}</div>
                            <div class="grid grid-cols-4 gap-4">
                                @foreach ($categoryItems as $item)
                                    <div class="bg-white drop-shadow-md rounded-lg py-2 px-4 flex flex-row justify-between"">
                                        <button click="({{ $item->id }})" class="flex-grow-1 h-auto">{{ $item->name }}</button>
                                        <button click="({{ $item->id }})" class="text-gray-500 dark:text-gray-400">
                                            <i class="fa-solid fa-plus">
                                            </i>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>

    </div>

</div>
