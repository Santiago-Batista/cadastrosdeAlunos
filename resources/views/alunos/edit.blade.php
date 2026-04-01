@extends('layouts.app')

@section('content')

<h1 class="text-2xl mb-4">Editar Aluno</h1>

<form method="POST" action="/alunos/{{ $aluno->id }}" class="space-y-3">
@csrf @method('PUT')

<input name="nome" value="{{ $aluno->nome }}" class="w-full p-2 bg-gray-800 rounded">
<input name="curso" value="{{ $aluno->curso }}" class="w-full p-2 bg-gray-800 rounded">

<button class="bg-blue-500 px-4 py-2 rounded">Atualizar</button>

</form>

@endsection