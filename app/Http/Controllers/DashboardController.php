<?php

// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use App\Models\Gear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function gearIndex()
    {
        $gears = Gear::all();
        return view('dashboard.gears.index', compact('gears'));
    }

    public function gearCreate()
    {
        return view('dashboard.gears.create');
    }

    public function gearStore(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'nullable|url',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        Gear::create($data);

        return redirect()->route('dashboard.gear.index')->with('success', 'Gear added successfully.');
    }

    public function gearShow($id)
    {
        $gear = Gear::findOrFail($id);
        return view('dashboard.gears.show', compact('gear'));
    }

    public function gearEdit($id)
    {
        $gear = Gear::findOrFail($id);
        return view('dashboard.gears.edit', compact('gear'));
    }

    public function gearUpdate(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'nullable|url',
        ]);

        $gear = Gear::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($gear->image) {
                Storage::delete('public/' . $gear->image);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $gear->update($data);

        return redirect()->route('dashboard.gear.index')->with('success', 'Gear updated successfully.');
    }

    public function gearDestroy($id)
    {
        $gear = Gear::findOrFail($id);
        $gear->delete();
        return redirect()->route('dashboard.gear.index');
    }
}
