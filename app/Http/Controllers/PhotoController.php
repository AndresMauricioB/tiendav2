<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoRequest;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $images = Photo::all();
        return view('admin.photos.index', [
            'images' => $images
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhotoRequest $request)
    {
        $file = $request->file('name');
        // Guardar el archivo en Firebase Storage y obtener su URL de descarga
        $url = Storage::disk('public')->putFile('image', $file);
        // Guardar la URL de descarga en la base de datos
        $photo = new Photo();
        $photo->name = $request->file('name')->getClientOriginalName();
        $photo->path = $url;
        $photo->save();
        return redirect('/photos');
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
    public function destroy(Photo $photo)
    {
        Storage::delete($photo->path);
        $photo->delete();
        return back();
    }
}
