<form method="POST"
      enctype="multipart/form-data"
      class="w-full bg-stone-900 rounded-2xl p-6 flex flex-col gap-4">

    <div class="flex flex-col gap-1">
        <label for="email" class="text-sm text-white">Email</label>
        <input
            type="text"
            id="email"
            name="email"
            placeholder="Email"
            class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
        >
    </div>

    <div class="flex flex-col gap-1">
        <label for="password" class="text-sm text-white">Senha</label>
        <input
            type="text"
            id="password"
            name="password"
            placeholder="Senha"
            class="rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-lime-500"
        >
    </div>

    <button
        type="submit"
        class="mt-4 bg-lime-500 hover:bg-lime-600 text-black font-medium py-2 rounded-lg transition cursor-pointer"
    >
        Entrar
    </button>
    <div class="flex items-center gap-1">
        <p>
            Não tem login ?
        </p>
        <a class="cursor-pointer text-lime-500 font-medium py-2 rounded-lg transition"
           href="/login-create"
        >
            Criar</a>
    </div>
</form>