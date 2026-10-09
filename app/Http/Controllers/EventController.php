<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $artikels = DB::table('artikel')->get();

        return view('welcome', compact('artikels'));
    }
}