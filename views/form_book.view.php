<div class="grid w-full rounded-2xl p-6 gap-4">

    <div class="flex items-center justify-start gap-5">
        <a href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-left">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 12l14 0"/>
                <path d="M5 12l4 4"/>
                <path d="M5 12l4 -4"/>
            </svg>
        </a>

        <div>
            <h2 class="text-xl font-semibold text-white text-center">
                Cadastrar novo livro
            </h2>
        </div>
    </div>

    <form method="POST"
          enctype="multipart/form-data"
          class="w-full bg-stone-900 rounded-2xl p-6 flex flex-col gap-4">

        <div class="grid grid-cols-2 gap-3">
            <div class="flex flex-col gap-1 h-full">
                <label
                        id="label-preview"
                        for="photo"
                        class="cursor-pointer bg-stone-900 text-lime-500 h-full px-4 py-2 rounded text-center content-center hover:bg-green-950">
                        Selecionar foto
                    </label>
                    <input
                            type="file"
                            id="photo"
                            name="photo"
                            class="hidden"
                    >
                <div id="container-preview" class="flex flex-col p-3 hidden w-full h-full">
                    <img id="preview"
                         src="<?= __DIR__ . "/storage/" . ($book->photo_path ?? '')?>"
                         class="object-cover rounded w-full h-full"
                         alt="Preview">

                    <span id="file-name" class="text-sm text-gray-400"></span>
                </div>
            </div>

            <div>
                <div class="flex flex-col gap-1">
                    <label for="title" class="text-sm text-white">Título</label>
                    <input
                            type="text"
                            id="title"
                            name="title"
                            value="<?= $book->title ?? '' ?>"
                            placeholder="título"
                            class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
                    >
                </div>

                <div class="flex flex-col gap-1">
                    <label for="author" class="text-sm text-white">Autor</label>
                    <input
                            type="text"
                            id="author"
                            name="author"
                            value="<?= $book->author ?? '' ?>"
                            placeholder="autor"
                            class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
                    >
                </div>

                <div class="flex flex-col gap-1">
                    <label for="description" class="text-sm text-white">Descrição</label>
                    <input
                            type="text"
                            id="description"
                            name="description"
                            value="<?= $book->description ?? '' ?>"
                            placeholder="descrição"
                            class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
                    >
                </div>

            </div>
        </div>

        <button
                type="submit"
                class="mt-4 bg-lime-500 hover:bg-lime-600 text-black font-medium py-2 rounded-lg transition"
        >
            Salvar
        </button>
    </form>

    <script>
        document.getElementById('photo').addEventListener('change', function () {
            const file = this.files[0];

            if (!file) return;
            document.getElementById('label-preview').classList.add('hidden')
            document.getElementById('file-name').textContent = file.name;
            document.getElementById('container-preview').classList.remove('hidden')
            const preview = document.getElementById('preview');
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
        });
    </script>
</div>