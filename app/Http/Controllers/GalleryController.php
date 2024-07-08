<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Aquí obtienes las imágenes desde tu modelo o cualquier otra fuente
        $images = [
            (object) ['path' => 'img/portfolio-1.jpg'],
            (object) ['path' => 'img/portfolio-2.jpg'],
            (object) ['path' => 'img/portfolio-3.jpg'],
            (object) ['path' => 'img/portfolio-4.jpg'],
            (object) ['path' => 'img/portfolio-5.jpg'],
            (object) ['path' => 'img/portfolio-6.jpg'],
            (object) ['path' => 'img/portfolio-7.jpg'],
            (object) ['path' => 'img/portfolio-8.jpg'],
            (object) ['path' => 'img/portfolio-9.jpg'],
        ];

        return view('gallery', compact('images'));
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
}
