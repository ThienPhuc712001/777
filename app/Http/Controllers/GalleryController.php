<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_url' => 'required|string|max:255',
        ]);

        Gallery::create($request->all());
        return redirect()->route('gallery.index')->with('success', 'Image added successfully.');
    }

    public function show(Gallery $gallery)
    {
        return view('gallery.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_url' => 'required|string|max:255',
        ]);

        $gallery->update($request->all());
        return redirect()->route('gallery.index')->with('success', 'Image updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully.');
    }
}
