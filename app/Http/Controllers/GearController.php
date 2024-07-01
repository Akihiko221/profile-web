<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gear;
use Illuminate\Support\Facades\Storage;

class GearController extends Controller
{
    public function index()
    {
        $gears = Gear::all();
        return view('gear', compact('gears'));
    }

    public function dashboardIndex()
    {
        $gears = Gear::all();
        return view('admin.gears.index', compact('gears'));
    }

    public function create()
    {
        return view('admin.gears.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
            'link' => 'nullable|url',
        ]);

        $data['image'] = $request->file('image')->store('gears');

        Gear::create($data);

        return redirect()->back()->with('success', 'Item telah berhasil ditambahkan');
    }

    public function edit(Gear $gear)
    {
        return view('admin.gears.edit', compact('gear'));
    }

    public function update(Request $request, Gear $gear)
    {
        $data = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($gear->image);
            $data['image'] = $request->file('image')->store('gears');
        }

        $gear->update($data);

        return redirect()->route('admin.dashboard.gear');
    }

    public function destroy(Gear $gear)
    {
        Storage::delete($gear->image);
        $gear->delete();

        return redirect()->route('admin.dashboard.gear');
    }
}
