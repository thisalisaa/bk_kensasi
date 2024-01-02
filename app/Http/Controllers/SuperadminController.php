<?php
// app/Http/Controllers/SuperadminController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index()
    {
        $datasiswa = User::where('role_id', 3)->get();
        return view('superadmin.index', compact('datasiswa'));
    }
}
