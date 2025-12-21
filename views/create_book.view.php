<div class="flex items-center justify-center">
    <form method="POST"
          class="w-full max-w-md bg-stone-900 rounded-2xl shadow-lg p-6 flex flex-col gap-4">

        <h2 class="text-xl font-semibold text-white text-center">
            Cadastro
        </h2>

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