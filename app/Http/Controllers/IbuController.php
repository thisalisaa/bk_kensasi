<?php

// app/Http/Controllers/IbuController.php

namespace App\Http\Controllers;

use App\Models\Ibu;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    public function index()
    {
        $ibu = Ibu::all();
        return view('ibu.index', compact('ibu'));
    }

    public function create()
    {
        return view('ibu.create');
    }

    public function store(Request $request)
    {
        Ibu::create($request->all());
        return redirect()->route('ibu.index')->with('success', 'Data Ibu berhasil disimpan.');
    }

    public function edit(Ibu $ibu)
    {
        return view('ibu.edit', compact('ibu'));
    }

    public function update(Request $request, Ibu $ibu)
    {
        $ibu->update($request->all());
        return redirect()->route('ibu.index')->with('success', 'Data Ibu berhasil diperbarui.');
    }

    public function destroy(Ibu $ibu)
    {
        $ibu->delete();
        return redirect()->route('ibu.index')->with('success', 'Data Ibu berhasil dihapus.');
    }
}

