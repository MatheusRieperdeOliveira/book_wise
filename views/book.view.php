<div class="p-4 rounded border-stone-800 border-2 bg-stone-900">
    <div class="relative h-130 w-full bg-cover bg-top rounded"
         style="background-image: url('<?= '/storage/book_cover/' . $book->photo_path ?>')">

        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative p-4 h-full ">
            <div class="flex flex-col-reverse space-y-1 h-full">
                <div class="flex items-center">
                    <div class="text-xs italic">⭐⭐⭐⭐⭐ (3 avaliações)</div>
                    <div class="text-xs italic">
                        <div>

                            <p>
                                por:
                                <?= $book->author ?>
                            </p>
                        </div>
                    </div>
                </div>
                <h1 class="font-bold text-6xl"><?= $book->title ?></h1>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-2 mt-4">
        <button id="like" class="flex items-center cursor-pointer bg-sky-600 rounded-lg py-1 px-3 gap-2">
            <svg id="not-fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-up">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3"/>
            </svg>
            <svg id="fill" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff"
                 class="hidden icon icon-tabler icons-tabler-filled icon-tabler-thumb-up">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M13 3a3 3 0 0 1 2.995 2.824l.005 .176v4h2a3 3 0 0 1 2.98 2.65l.015 .174l.005 .176l-.02 .196l-1.006 5.032c-.381 1.626 -1.502 2.796 -2.81 2.78l-.164 -.008h-8a1 1 0 0 1 -.993 -.883l-.007 -.117l.001 -9.536a1 1 0 0 1 .5 -.865a2.998 2.998 0 0 0 1.492 -2.397l.007 -.202v-1a3 3 0 0 1 3 -3z"/>
                <path d="M5 10a1 1 0 0 1 .993 .883l.007 .117v9a1 1 0 0 1 -.883 .993l-.117 .007h-1a2 2 0 0 1 -1.995 -1.85l-.005 -.15v-7a2 2 0 0 1 1.85 -1.995l.15 -.005h1z"/>
            </svg>
            <p class="font-bold">Curtir</p>
        </button>
        <button class="flex items-center gap-2 cursor-pointer hover:bg-orange-600 rounded-lg py-1 px-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="icon icon-tabler icons-tabler-outline icon-tabler-message-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 9h8"/>
                <path d="M8 13h6"/>
                <path d="M9 18h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-3l-3 3l-3 -3z"/>
            </svg>
            <p>Comentar</p>
        </button>
        <button class="flex items-center gap-2 cursor-pointer rounded-lg py-1 px-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="icon icon-tabler icons-tabler-outline icon-tabler-share">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
                <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
                <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
                <path d="M8.7 10.7l6.6 -3.4"/>
                <path d="M8.7 13.3l6.6 3.4"/>
            </svg>
            <p>Compartilhar</p>
        </button>
    </div>
</div>

<div class="grid grid-cols-3 gap-3">
    <div class="col-span-2 p-2 rounded border-stone-800 border-2 bg-stone-900">
        <p class="text-bold text-2xl">Sobre o Jogo</p>
        <div class="text-sm mt-1">
            <?= $book->description ?>
        </div>
    </div>
    <div class="col-span-1 p-2 rounded border-stone-800 border-2 bg-stone-900">
        <p class="text-bold text-2xl">Estatísticas</p>
    </div>
</div>