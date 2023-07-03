<?php

namespace App\Http\Controllers;

use App\Models\bukuapi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class buku extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('searchTerm');

        $response = Http::get('https://www.googleapis.com/books/v1/volumes', [
            'q' => $searchTerm,
        ]);

        $data = $response->json();

        $books = isset($data['items']) ? $data['items'] : [];

        return view('dashboard', compact('books'));
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
    public function show(bukuapi $bukuapi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bukuapi $bukuapi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bukuapi $bukuapi)
    {
        //
    }
}
