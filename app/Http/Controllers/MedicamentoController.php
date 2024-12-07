<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class MedicamentoController extends Controller
{
    public function home()
    {
        $medicamentos = Medicamento::latest()->take(5)->get(); // Mostra os 5 medicamentos mais recentes
        return view('pagina_inicial', compact('medicamentos'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');  // Captura o valor da query string 'search'

    // Se houver um valor de pesquisa, filtre os medicamentos pelo nome
        if ($search) {
           $medicamentos = Medicamento::where('nome', 'like', "%{$search}%")->get();
        } else {
            $medicamentos = Medicamento::all();  // Caso contrário, pega todos os medicamentos
        }

    return view('medicamentos.read', compact('medicamentos'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'dosagem' => 'required|string|max:255',
        'quantidade_em_estoque' => 'required|integer|min:0',
        'descricao' => 'nullable|string',
        'data_validade' => 'required|date',
        'categoria' => 'required|string|max:255',
        'imagem' => 'nullable|image|max:2048',
        ]);

        $dados = $request->all();
        $dados['criado_em'] = Carbon::now()->format('Y-m-d H:i:s');

    // Lida com upload de imagem
        if ($request->hasFile('imagem')) {
            $dados['imagem'] = $request->file('imagem')->store('imagens', 'public');
        }

    // Salva o medicamento e armazena na variável
        $medicamento = Medicamento::create($dados);

    // Redireciona para a página de detalhes do medicamento recém-criado/ retorna à página inicial
    return view('medicamentos.show', compact('medicamento'));
}


    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $medicamento = Medicamento::findOrFail($id); // Busca o medicamento pelo ID
        return view('medicamentos.show', compact('medicamento'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medicamento = Medicamento::findOrFail($id); // Carrega o medicamento pelo ID
        return view('medicamentos.edit', compact('medicamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'nome' => 'required|string|max:255',
        'dosagem' => 'required|string|max:255',
        'quantidade_estoque' => 'required|integer|min:0',
        'descricao' => 'nullable|string',
        'data_validade' => 'required|date',
        'categoria' => 'required|string|max:255',
    ]);

    $medicamento = Medicamento::findOrFail($id); // Busca o medicamento no banco

    $dados = $request->all();

    $medicamento->update($dados); // Atualiza os dados no banco de dados

    return redirect()->route('medicamentos.index')->with('success', 'Medicamento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $medicamento = Medicamento::findOrFail($id);

    // Exclui a imagem associada, se existir
        if ($medicamento->imagem) {
        Storage::delete('public/' . $medicamento->imagem);
        }

    $medicamento->delete();

    return redirect()->route('medicamentos.index')->with('success', 'Medicamento excluído com sucesso!');
    }


}
