<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        $busca = $request->busca;

        $alunos = Aluno::where('user_id', auth()->id())
            ->where('nome', 'like', "%$busca%")
            ->get();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        Aluno::create([
            ...$request->all(),
            'user_id' => auth()->id()
        ]);

        return redirect('/alunos');
    }
//sasa
    public function show($id)
    {
        $aluno = Aluno::find($id);
        return view('alunos.show', compact('aluno'));
    }

    public function edit($id)
    {
        $aluno = Aluno::find($id);
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        $aluno->update($request->all());

        return redirect('/alunos');
    }

    public function destroy($id)
    {
        Aluno::destroy($id);
        return redirect('/alunos');
    }
}