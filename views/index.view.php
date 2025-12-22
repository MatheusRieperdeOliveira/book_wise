<a class="flex items-center bg-lime-500 rounded w-10 py-1 justify-center text-white flex-direction-end font-bold"
   href="/add-book">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
         class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 5l0 14"/>
        <path d="M5 12l14 0"/>
    </svg>
</a>

<form class="w-full flex space-x-2 mt-6">
    <input
            type="text"
            placeholder="Pesquisar"
            name="pesquisar"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full">
    <button type="submit">Pesquisar</button>
</form>
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
    <?php foreach ($books as $book): ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">

            <div class="flex">
                <div class="w-1/3">
                    imagem
                </div>

                <div class="space-y-1">
                    <a href="/book?id=<?= $book->id ?>"
                       class="font-semibold cursor-pointer rounded-lg hover:bg-stone-400">
                        <?= $book->title ?>
                    </a>

                    <div class="text-xs italic">
                        <?= $book->author ?>
                    </div>

                    <div class="text-xs italic">
                        ⭐⭐⭐⭐⭐
                        (3 avalições)
                    </div>
                </div>
            </div>

            <div class="text-sm mt-1">
                <?= $book->description ?>
            </div>

            <div class="grid grid-cols-2 gap-1">
                <div class="flex justify-center bg-red-600 rounded py-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 7h16"/>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/>
                        <path d="M10 12l4 4m0 -4l-4 4"/>
                    </svg>
                </div>
                <div class="flex justify-center bg-blue-600 rounded py-1 cursor-pointerx'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"/>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"/>
                        <path d="M16 5l3 3"/>
                    </svg>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>
