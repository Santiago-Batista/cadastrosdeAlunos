<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 flex items-center justify-center h-screen">

<div class="bg-gray-800 p-6 rounded w-80 text-white">

<h2 class="text-xl mb-4 text-center">Cadastro</h2>

<form method="POST" action="/register">
@csrf

<input name="name" placeholder="Nome" class="w-full mb-2 p-2 bg-gray-700">
<input name="email" placeholder="Email" class="w-full mb-2 p-2 bg-gray-700">
<input type="password" name="password" placeholder="Senha" class="w-full mb-2 p-2 bg-gray-700">
<input type="password" name="password_confirmation" placeholder="Confirmar senha" class="w-full mb-4 p-2 bg-gray-700">

<button class="w-full bg-green-500 p-2">Cadastrar</button>
</form>

<a href="/" class="block text-center mt-3 text-blue-400">Voltar</a>

</div>

</body>
</html>