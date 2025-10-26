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
        </div>
    <?php endforeach; ?>
</section>
