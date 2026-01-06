<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" href="faviconcoruja.png" type="image/x-icon">
    <title>Book Wise</title>
</head>
<body style="background-color: #141c21" class="text-stone-100">
<header style="background-color: #141c21">
    <nav class="mx-auto max-w-screen-lg flex justify-between py-4">

        <div class="font-bold text-xl tracking-wide font-[Open Sans]">Book Wise</div>

        <ul class="flex space-x-4 font-bold">
            <li><a class="text-lime-500" href="/">Explore</a></li>
            <li><a href="/my-books">My books</a></li>
        </ul>
        <ul>
            <li><a href="/login">Fazer login</a></li>
        </ul>
    </nav>
</header>
<main class="mx-20 space-y-6 py-6">
    <?php require "../views/$view.view.php"; ?>
</main>
</body>
</html>