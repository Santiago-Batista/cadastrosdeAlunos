@extends('layouts.app')

@section('content')

<h1 class="text-2xl mb-4">Novo Aluno</h1>

<form method="POST" action="/alunos" class="space-y-3">
@csrf

<input name="nome" placeholder="Nome" class="w-full p-2 bg-gray-800 rounded">
<input name="email" placeholder="Email" class="w-full p-2 bg-gray-800 rounded">
<input name="telefone" placeholder="Telefone" class="w-full p-2 bg-gray-800 rounded">
<input type="date" name="data_nascimento" class="w-full p-2 bg-gray-800 rounded">
<input name="curso" placeholder="Curso" class="w-full p-2 bg-gray-800 rounded">
<input name="matricula" placeholder="Matrícula" class="w-full p-2 bg-gray-800 rounded">

<button class="bg-green-500 px-4 py-2 rounded">Salvar</button>

</form>

@endsection