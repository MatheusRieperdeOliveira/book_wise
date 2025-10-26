<div class="p-4 rounded border-stone-800 border-2 bg-stone-900">
    <div class="flex">
        <div class="w-1/3">imagem</div>
        <div class="space-y-1">
            <div class="font-semibold text-lg"><?= $book->title ?></div>
            <div class="text-xs italic"><?= $book->author ?></div>
            <div class="text-xs italic">⭐⭐⭐⭐⭐ (3 avaliações)</div>
        </div>
    </div>
    <div class="text-sm mt-2">
        <?= $book->description ?>
    </div>
</div>