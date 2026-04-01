@extends('layouts.app')

@section('content')

<div class="flex justify-between mb-4">
    <h1 class="text-2xl">Alunos</h1>
    <a href="/alunos/create" class="bg-blue-500 px-4 py-2 rounded">+ Novo</a>
</div>

<form class="mb-4">
    <input name="busca" placeholder="Buscar aluno..."
    class="p-2 rounded bg-gray-800 w-full">
</form>

<div class="bg-gray-800 rounded overflow-hidden">

<table class="w-full">
<thead class="bg-gray-700">
<tr>
<th class="p-3 text-left">Nome</th>
<th>Curso</th>
<th>Ações</th>
</tr>
</thead>

<tbody>
@foreach($alunos as $a)
<tr class="border-t border-gray-600">
<td class="p-3">{{ $a->nome }}</td>
<td>{{ $a->curso }}</td>

<td class="space-x-2">
<a href="/alunos/{{ $a->id }}" class="text-blue-400">Ver</a>
<a href="/alunos/{{ $a->id }}/edit" class="text-yellow-400">Editar</a>

<form method="POST" action="/alunos/{{ $a->id }}" class="inline">
@csrf @method('DELETE')
<button class="text-red-400">Excluir</button>
</form>

</td>
</tr>
@endforeach
</tbody>

</table>

</div>

@endsection