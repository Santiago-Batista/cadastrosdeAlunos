<!DOCTYPE html>
<html>
<head>
    <title>Sistema</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

<div class="flex">

    <!-- MENU -->
    <aside class="w-64 bg-gray-800 min-h-screen p-4">
        <h2 class="text-xl mb-6">Sistema</h2>

        <a href="/dashboard" class="block mb-3 hover:text-blue-400">Dashboard</a>
        <a href="/alunos" class="block mb-3 hover:text-blue-400">Alunos</a>

        <form method="POST" action="/logout" class="mt-6">
            @csrf
            <button class="text-red-400">Sair</button>
        </form>
    </aside>

    <!-- CONTEÚDO -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</div>

</body>
</html>