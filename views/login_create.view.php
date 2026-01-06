<form method="POST"
      enctype="multipart/form-data"
      class="w-full bg-stone-900 rounded-2xl p-6 flex flex-col gap-4">

    <div class="grid grid-cols-1 md:grid-cols-[1fr_2fr] gap-3">
        <div class="flex flex-col gap-1 h-full items-center">
            <label
                id="label-preview"
                for="user_photo"
                class="w-50 rounded-full cursor-pointer bg-stone-900 text-lime-500 h-full text-center content-center hover:bg-green-950">
                Sua foto
            </label>
            <input
                type="file"
                id="user_photo"
                name="user_photo"
                class="hidden"
            >
            <div id="container-preview" class="flex flex-col p-3 hidden w-full h-full">
                <img id="preview"
                     src="<?= __DIR__ . "/storage/" . ($book->photo_path ?? '')?>"
                     class="object-cover rounded w-full h-full"
                     alt="Preview">
            </div>
        </div>

        <div class="grow-1">
            <div class="flex flex-col gap-1">
                <label for="user_name" class="text-sm text-white">Nome</label>
                <input
                    type="text"
                    id="user_name"
                    name="user_name"
                    placeholder="Nome"
                    class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
                >
            </div>

            <div class="flex flex-col gap-1">
                <label for="email" class="text-sm text-white">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Email"
                    class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
                >
            </div>

            <div class="flex flex-col gap-1">
                <label for="password" class="text-sm text-white">Senha</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Senha"
                    class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
                >
            </div>

        </div>
    </div>

    <button
        type="submit"
        class="mt-4 bg-lime-500 hover:bg-lime-600 text-black font-medium py-2 rounded-lg transition cursor-pointer"
    >
        Salvar
    </button>
    <div class="flex items-center gap-1">
        <p>
            Já tenho login ?
        </p>
        <a class="cursor-pointer text-lime-500 font-medium py-2 rounded-lg transition"
            href="/login"
        >
        Logar</a>
    </div>
</form>