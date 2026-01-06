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
    <button type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="icon icon-tabler icons-tabler-outline icon-tabler-search">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"/>
            <path d="M21 21l-6 -6"/>
        </svg>
    </button>
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
    <?php foreach ($books as $book): ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-neutral-900 flex justify-between flex-col space-y-3">
            <div class="flex gap-2">
                <div class="w-1/3 rounded">
                    <img src="../storage/book_cover/<?= $book->photo_path ?>" class="rounded">
                </div>

                <div class="space-y-1 px-2">
                    <p
                       class="font-semibold">
                        <?= $book->title ?>
                    </p>

                    <div class="text-xs italic">
                        <?= $book->author ?>
                    </div>

                    <div class="text-xs italic">
                        ⭐⭐⭐⭐⭐
                        (3 avalições)
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-1">
                <a href="/delete-book?id=<?= $book->id ?>">
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
                </a>
                <a href="/update-book?id=<?=$book->id?>"
                        class="flex justify-center bg-blue-600 rounded py-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"/>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"/>
                        <path d="M16 5l3 3"/>
                    </svg>
                </a>
                <a href="/book?id=<?=$book->id?>"
                        class="flex justify-center bg-lime-600 rounded py-1 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"/>
                        <path d="M12 9h.01"/>
                        <path d="M11 12h1v4h1"/>
                    </svg>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</section>
