<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 flex items-center justify-center h-screen">

<div class="bg-gray-800 p-6 rounded w-80 text-white">

<h2 class="text-xl mb-4 text-center">Login</h2>

<form method="POST" action="/login">
@csrf

<input name="email" placeholder="Email" class="w-full mb-2 p-2 bg-gray-700">
<input type="password" name="password" placeholder="Senha" class="w-full mb-4 p-2 bg-gray-700">

<button class="w-full bg-blue-500 p-2">Entrar</button>
</form>

<p class="text-center mt-4 text-sm">
Não tem conta?
<a href="/register" class="text-blue-400">Cadastre-se</a>
</p>

</div>

</body>
</html>