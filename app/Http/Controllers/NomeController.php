<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nome;

class NomeController extends Controller
{
    /**
     * function index
     *
     * @param Request $request
     * @return
     */
    public function index(Request $request)
    {
        $orderBy = $request->query('order-by', 'id');
        $orderDirection = $request->query('dir', 'asc');

        $nomes = Nome::orderBy($orderBy, $orderDirection)->paginate(10);

        return view('nomes.index', [
            'nomes' => $nomes
        ]);
    }

    /**
     * function show
     *
     * @param Request $request,
     * @param int $nomeId
     * @return
     */
    public function show(Request $request, int $nomeId)
    {
        $nome = Nome::where('id', $nomeId)->first();

        if (!$nome) {
            return redirect()
                ->route('nomes.index')
                ->with('error', __('Nome not found'));
        }

        return view('nomes.show', [
            'nome' => $nome,
        ]);
    }

    /**
     * function edit
     *
     * @param Request $request,
     * @param int $nomeId
     * @return
     */
    public function edit(Request $request, int $nomeId)
    {
        $nome = Nome::where('id', $nomeId)->first();

        if (!$nome) {
            return redirect()
                ->route('nomes.index')
                ->with('error', __('Nome not found'));
        }

        return view('nomes.edit', [
            'nome' => $nome,
        ]);
    }

    /**
     * function create
     *
     * @param Request $request,
     * @param int $nomeId
     * @return
     */
    public function create(Request $request)
    {
        return view('nomes.create');
    }

    /**
     * function confirmDelete
     *
     * @param Request $request,
     * @param int $nomeId
     * @return
     */
    public function confirmDelete(Request $request, int $nomeId)
    {
        $nome = Nome::where('id', $nomeId)->first();

        if (!$nome) {
            return redirect()
                ->route('nomes.index')
                ->with('error', __('Nome not found'));
        }

        return view('nomes.confirm_delete', [
            'nome' => $nome,
        ]);
    }

    /**
     * function update
     *
     * @param Request $request,
     * @param int $nomeId
     * @return
     */
    public function update(Request $request, int $nomeId)
    {
        $request->validate([
            'nome'      => 'nullable|string|min:5',
        ]);

        $nome = Nome::where('id', $nomeId)->first();

        if (!$nome) {
            return redirect()
                ->route('nomes.index')
                ->with('error', __('Nome not found'));
        }

        $data = $request->only([
            'nome',
        ]);

        $nome->update($data);

        return redirect()
                ->route('nomes.index')
                ->with('success', __('Updated nome'));
    }

    /**
     * function store
     *
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'      => 'required|string|min:5',
        ]);

        $data = $request->only([
            'nome',
        ]);

        $nome = Nome::create($data);

        if (!$nome) {
            return redirect()
                ->route('nomes.index')
                ->with('error', __('Failed to register nome'));
        }

        return redirect()
                ->route('nomes.index')
                ->with('success', __('Nome created successfully'));
    }

    /**
     * function delete
     *
     * @param Request $request,
     * @param int $nomeId
     * @return
     */
    public function delete(Request $request, int $nomeId)
    {
        $nome = Nome::where('id', $nomeId)->first();

        if (!$nome) {
            return redirect()
                ->route('nomes.index')
                ->with('error', __('Nome updated successfully'));
        }

        $nome->delete();

        return redirect()
                ->route('nomes.index')
                ->with('success', __('Nome deleted successfully'));
    }
}
