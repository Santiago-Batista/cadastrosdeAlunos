@extends('layouts.app')

@section('content')

<h1 class="text-3xl mb-6">Dashboard</h1>

<div class="grid grid-cols-3 gap-6">

    <div class="bg-gray-800 p-6 rounded">
        <h2 class="text-lg">Usuário</h2>
        <p class="text-2xl">{{ auth()->user()->name }}</p>
    </div>

    <div class="bg-gray-800 p-6 rounded">
        <h2>Total de Alunos</h2>
        <p class="text-2xl">{{ \App\Models\Aluno::count() }}</p>
    </div>

</div>

@endsection