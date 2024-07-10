<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif;

class TarifController extends Controller
{
    public function index()
    {
        $tarifs = Tarif::all();
        return view('tarifs.index', compact('tarifs'));
    }

    public function create()
    {
        return view('tarifs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        Tarif::create($request->all());

        return redirect()->route('tarifs.index');
    }

    public function edit(Tarif $tarif)
    {
        return view('tarifs.edit', compact('tarif'));
    }

    public function update(Request $request, Tarif $tarif)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'price' => 'required|string|max:255',
        ]);

        $tarif->update($request->all());

        return redirect()->route('tarifs.index');
    }

    public function destroy(Tarif $tarif)
    {
        $tarif->delete();

        return redirect()->route('tarifs.index');
    }
}
