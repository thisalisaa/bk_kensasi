<?php

namespace App\Http\Controllers;

use App\Models\LayananMasalah;
use Illuminate\Http\Request;



class LayananMasalahController extends Controller
{

    public function index()
    {
        $layanan = LayananMasalah::latest()->paginate(5);
        return view('layanan.index',compact('layanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('layanan.create');
    }
  
    // public function store(Request $request)
    // {
    //     $request->validate([
            
    //         'nama' => 'required',
    //         'kelas' => 'required',
    //         'masalah' => 'required',

    //     ]);
      
    //     LayananMasalah::create($request->all());
       
    //     return redirect()->route('layanan.index')
    //                     ->with('success','Laporan Berhasil.');
    // }
    public function store(Request $request)
{
    // Validation logic
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'kelas' => 'required|string|max:255',
        'masalah' => 'required|string',
    ]);

    // Store data in the database
    LayananMasalah::create($validatedData);

    // Redirect or respond as needed
    return redirect()->route('layanan.index')->with('success', 'Laporan berhasil dibuat!');
}

  
    public function show(LayananMasalah $layanan)
    {
        return view('layanan.show',compact('layanan'));
    }
  
    public function edit(LayananMasalah $layanan)
    {
        return view('layanan.edit',compact('layanan'));
    }

    public function update(Request $request, LayananMasalah $layanan)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'masalah' => 'required',
        ]);
    
        $layanan->update($request->all());
    
        return redirect()->route('layanan.index')
                        ->with('success','Laporan Berhasil diUbah');
    }

    public function destroy(LayananMasalah $layanan)
    {
        $layanan->delete();
    
        return redirect()->route('layanan.index')
                        ->with('success','Data Berhasil diHapus');
    }
}