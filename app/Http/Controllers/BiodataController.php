<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use PDF;



class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodata = Biodata::latest()->paginate(5);
        return view('biodata.biodata',compact('biodata'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function biodata() {
        $biodata = Biodata::latest()->paginate(5);
        return view('biodata.biodata',compact('biodata'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function cetak_pdf()
    {
    $biodata = Biodata::all();
    $pdf = PDF::loadview('biodata.biodatapdf', ['biodata' => $biodata]);
    return $pdf->download('laporan-biodata.pdf');
    }
}
