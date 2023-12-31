<?php

// app/Http/Controllers/AyahController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayah;

class AyahController extends Controller
{
    public function index()
    {
        // Retrieve all records from the Ayah model
        $ayah = Ayah::all();

        // Pass the retrieved data to the view
        return view('ayah.index', ['ayah' => $ayah]);
    }

    public function create()
    {
        return view('ayah.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'pendidikan_terakhir' => 'required|string',
            'alamat_lengkap' => 'required|string',
            'nomor_telepon' => 'required|string',
            'pekerjaan' => 'required|string',
            'penghasilan' => 'required|string',
        ]);

        Ayah::create($validatedData);

        return redirect()->route('ibu.create'); // Assuming 'ibu.create' is the correct route
    }
}
