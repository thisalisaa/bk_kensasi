<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;





class UserController extends Controller
{
   
    public function index()
    {
        $users = User::where('role_id', 3)->get();
        return view('users.index', compact('users'));
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

    
    public function show(string $id)
    {
        $user = Auth::user();

        // Jika Anda ingin menampilkan data user berdasarkan ID yang diterima
        // Anda perlu mengganti baris berikut dengan query yang sesuai
        // $user = User::findOrFail($id);

        return view('users.detail-data', compact('user'));
    }

   
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
