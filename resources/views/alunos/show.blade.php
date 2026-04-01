@extends('layouts.app')

@section('content')

<h1 class="text-2xl mb-4">{{ $aluno->nome }}</h1>

<div class="bg-gray-800 p-6 rounded space-y-2">
<p>Email: {{ $aluno->email }}</p>
<p>Telefone: {{ $aluno->telefone }}</p>
<p>Curso: {{ $aluno->curso }}</p>
<p>Matrícula: {{ $aluno->matricula }}</p>
</div>

@endsection