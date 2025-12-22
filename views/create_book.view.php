<div class="flex items-center justify-center">
    <form method="POST"
          class="w-full max-w-md bg-stone-900 rounded-2xl shadow-lg p-6 flex flex-col gap-4">

        <div class="flex items-center gap-5">
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

        <div class="flex flex-col gap-1">
            <label for="title" class="text-sm text-white">Título</label>
            <input
                    type="text"
                    id="title"
                    name="title"
                    value="título"
                    class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
            >
        </div>

        <div class="flex flex-col gap-1">
            <label for="author" class="text-sm text-white">Autor</label>
            <input
                    type="text"
                    id="author"
                    name="author"
                    value="autor"
                    class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
            >
        </div>

        <div class="flex flex-col gap-1">
            <label for="description" class="text-sm text-white">Descrição</label>
            <input
                    type="text"
                    id="description"
                    name="description"
                    value="descrição"
                    class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
            >
        </div>

        <button
                type="submit"
                class="mt-4 bg-lime-500 hover:bg-lime-600 text-black font-medium py-2 rounded-lg transition"
        >
            Salvar
        </button>
    </form>
</div>