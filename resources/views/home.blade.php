<!DOCTYPE html>
<html>
<head>
    <title>Sistema</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 flex items-center justify-center h-screen text-white">

<div class="grid grid-cols-2 gap-6 w-3/4">

<!-- LOGIN -->
<div class="bg-gray-800 p-6 rounded">
<h2 class="text-xl mb-4">Login</h2>

@if(session('erro'))
<p class="text-red-400">{{ session('erro') }}</p>
@endif

<form method="POST" action="/login">
@csrf
<input name="email" placeholder="Email" class="block w-full mb-2 p-2 bg-gray-700">
<input type="password" name="password" placeholder="Senha" class="block w-full mb-2 p-2 bg-gray-700">

<button class="bg-blue-500 px-4 py-2 w-full">Entrar</button>
</form>
</div>

<!-- CADASTRO -->
<div class="bg-gray-800 p-6 rounded">
<h2 class="text-xl mb-4">Cadastro</h2>

<form method="POST" action="/register">
@csrf
<input name="name" placeholder="Nome" class="block w-full mb-2 p-2 bg-gray-700">
<input name="email" placeholder="Email" class="block w-full mb-2 p-2 bg-gray-700">
<input type="password" name="password" placeholder="Senha" class="block w-full mb-2 p-2 bg-gray-700">

<button class="bg-green-500 px-4 py-2 w-full">Cadastrar</button>
</form>
</div>

</div>

</body>
</html>