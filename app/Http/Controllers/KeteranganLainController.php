<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KeteranganLain;

class KeteranganLainController extends Controller
{
    
    public function index()
    {
    $keterangan = KeteranganLain::latest()->paginate(5);
    return view('keteranganlain.index', compact('keterangan'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keteranganlain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'keterangan1' => 'required',
        'keterangan2' => 'required',
        'keterangan3' => 'required',
        'keterangan4' => 'required',
    ]);
    KeteranganLain::create($request->all());
    
    return redirect()->route('keteranganlain.index')
                    ->with('success','Keterangan Berhasil Dibuat.');

    }

    /**
     * Display the specified resource.
     */
    public function show(KeteranganLain $keterangan)
    {
    return view('keteranganlain.show', compact('keterangan'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $keterangansiswa = KeteranganLain::find($id);
        return view('keteranganlain.edit',compact('keterangansiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KeteranganLain $keterangan)
    {
        $request->validate([
            'keterangan1' => 'required',
            'keterangan2' => 'required',
            'keterangan3' => 'required',
            'keterangan4' => 'required',
        ]);
    
        $keterangan->update($request->all());
    
        return redirect()->route('keteranganlain.index')
                        ->with('success','Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KeteranganLain $keterangan)
    {
        $keterangan->delete();
    
        return redirect()->route('keteranganlain.index')
                        ->with('success','Data Berhasil diHapus');
    }
}
